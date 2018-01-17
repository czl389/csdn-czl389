#include <stdio.h>
#include <stdlib.h>
#include <iostream>
#include <vector>
#include <string>
#include <math.h>

#include <opencv2/opencv.hpp>
#include <opencv2/highgui/highgui.hpp>


using namespace std;
using namespace cv;




class Line
{
public:
	//起点、终点、中点、线长、角度
	Point2f P=Point2f(0.f,0.f); 
	Point2f Q = Point2f(0.f, 0.f); 
	Point2f M = Point2f(0.f, 0.f); 
	double len{0};
	float degree{0};

	//参数a,b,p
	double a=1.0;
	double b=2.0;
	double p=1.0;

public:
	Line() :P(Point2f(0.f, 0.f)), Q(Point2f(0.f, 0.f)){};

	//由P,Q坐标得到中点，线长，角度信息 
	void PQtoMLD();

	void MLDtoPQ(); 
	void show();

	double Getu(Point2f X);
	double Getv(Point2f X);
	Point2f Get_Point(double u, double v);
	double Get_Weight(Point2f X);
};




class LinePair
{
public:
	Line leftLine;
	Line rightLine;
	vector<Line> warpLine;

public:

	//生成中间过渡的线段集合
	void genWarpLine(int frame_count);
};




class Image
{
public:

	//过渡帧序号
	int frame_index;

	Mat left_image;
	Mat right_image;
	Mat new_image;

public:
	Image(int frame_index,string leftImageName,string rightImageName);

	//双线性插值
	Vec3b bilinear(Mat image, double X, double Y);

	//生成过渡图像帧
	void Warp(int frame_count, string new_image_name, vector<LinePair> pairs);
};




class Morpher
{
public:
	vector<LinePair> pairs;
	LinePair curLinePair;

	//计数，交互式画线要用到
	int counter = 0;

	//设置动画的过渡帧，比如1为50%，3为25%，50%，75%
	int frame_count = 1;

	Mat leftImage;
	Mat rightImage;
	Mat leftImageTmp;
	Mat rightImageTmp;

	//显示相关。画线的颜色、线宽、偏移
	Scalar color = Scalar(0, 255, 0);
	int thickness = 2;
	int shift = 0;

	//按键值，用于控制
	int key;

	string first_image_name;
	string second_image_name;
	string new_image_name;


public:
	void show_pairs();

	//捕获左图像上的鼠标动作
	static void on_mousel(int event, int x, int y, int flag, void* param);

	//捕获右图像上的鼠标动作
	static void on_mouser(int event, int x, int y, int flag, void* param);

	//运行morph
	void runWarp();

	void main();

};
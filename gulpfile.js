//引入gulp
var gulp=require("gulp");

//引入第三方模块
var less=require("gulp-less");
var sass = require('gulp-sass');
var path=require("path");
var cleanCSS=require("gulp-clean-css");
var rename=require("gulp-rename");
var uglify=require("gulp-uglify");

//配置less编译任务
gulp.task("lestTask",function () {
	gulp.src("src/less/*.less") //源目录
	.pipe(less({
        paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
	.pipe(gulp.dest("dist/css")); //输出目录
});

//配置sass编译任务
gulp.task("sassTask",function () {
	gulp.src("src/sass/*.scss") //源目录
	.pipe(sass().on('error', sass.logError))
	.pipe(gulp.dest("dist/css")); //输出目录
});

//配置压缩css的任务
gulp.task("minCssTask",function () {
	gulp.src("dist/css/*.css") //源目录
	.pipe(cleanCSS({compatibility: 'ie8'}))
	.pipe(rename({
		suffix:".min" //重命名加min后缀
	}))
	.pipe(gulp.dest("dist/css/")); //输出目录
});

//配置js压缩的任务
gulp.task("minJsTask",function () {
	gulp.src("src/javascript/*.js") //源目录
	.pipe(uglify()) //执行压缩
	.pipe(rename({
		suffix: ".min"   //执行重命名
    })) 
	.pipe(gulp.dest("dist/js")); //输出目录
});

//开启观察者watch
gulp.task("default",function () {
	gulp.watch("src/less/*.less",["lestTask"]); //观察less变化执行less编译任务
	gulp.watch("src/sass/*.scss",["sassTask"]); //观察sass变化执行sass编译任务
	gulp.watch("dist/css/*.css",["minCssTask"]); //观察css变化执行css压缩任务
	gulp.watch("src/javascript/*.js",["minJsTask"]); //观察js变化执行js压缩任务
});

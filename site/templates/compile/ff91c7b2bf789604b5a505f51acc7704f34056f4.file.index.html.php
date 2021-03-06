<?php /* Smarty version Smarty-3.0.4, created on 2020-03-13 16:02:33
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/public/index.html" */ ?>
<?php /*%%SmartyHeaderCode:23215e6b3e1992be31-68980758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff91c7b2bf789604b5a505f51acc7704f34056f4' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/public/index.html',
      1 => 1584086523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23215e6b3e1992be31-68980758',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML5-Video-Player</title>
    <style type="text/css">
        .videoPlayer{
            border: 1px solid #000;
            width: 600px;
        }
        #video{
            margin-top: 0px;
        }
        #videoControls{
            width: 600px;
            margin-top: 0px;
        }
        .show{
            opacity: 1;
        }
        .hide{
            opacity: 0;
        }
        #progressWrap{
            background-color: black;
            height: 25px;
            cursor: pointer;
        }
        #playProgress{
            background-color: red;
            width: 0px;
            height: 25px;
            border-right: 2px solid blue;
        }
        #showProgress{
            background-color: ;
            font-weight: 600;
            font-size: 20px;
            line-height: 25px;
        }
    </style>
</head>
<body>
    <div class="">
        <h1>HTML5_Video_Player</h1>
        <div class="videoPlayer" id="videoContainer">
            <video id="video" 
            width="600" height="360" 
            preload controls
            >
                <source src="https://gfjugyu.oss-cn-shanghai.aliyuncs.com/MyVideo_1.mp4" type='video/mp4'>
               
            </video>
            <div id="videoControls"> 
                <div id="progressWrap">  
                    <div id="playProgress">  
                        <span id="showProgress">0</span> 
                    </div>
                </div>
                <div>
                    <button id="playBtn" title="Play"> 播放 </button> 
                    <button id="fullScreenBtn" title="FullScreen Toggle">  全屏 </button>
                </div> 
            </div> 
        </div>
    </div>
</body>
<script>
 (function(window, document){
            // 获取要操作的元素
            var video = document.getElementById("video");
            var videoControls = document.getElementById("videoControls");
            var videoContainer = document.getElementById("videoContainer");
            var controls = document.getElementById("video_controls");
            var playBtn = document.getElementById("playBtn");
            var fullScreenBtn = document.getElementById("fullScreenBtn");
            var progressWrap = document.getElementById("progressWrap");
            var playProgress = document.getElementById("playProgress");
            var fullScreenFlag = false;
            var progressFlag;

            // 创建我们的操作对象，我们的所有操作都在这个对象上。
            var videoPlayer = {
                init: function(){
                    var that = this;
                    video.removeAttribute("controls");
                    bindEvent(video, "loadeddata", videoPlayer.initControls);
                    videoPlayer.operateControls();
                },
                initControls: function(){
                    videoPlayer.showHideControls();
                },
                showHideControls: function(){
                    bindEvent(video, "mouseover", showControls);
                    bindEvent(videoControls, "mouseover", showControls);
                    bindEvent(video, "mouseout", hideControls);
                    bindEvent(videoControls, "mouseout", hideControls);
                },
                operateControls: function(){
                    bindEvent(playBtn, "click", play);
                    bindEvent(video, "click", play);
                    bindEvent(fullScreenBtn, "click", fullScreen);
                    bindEvent(progressWrap, "mousedown", videoSeek);
                }
            }

            videoPlayer.init();

            // 原生的JavaScript事件绑定函数
            function bindEvent(ele, eventName, func){
                if(window.addEventListener){
                    ele.addEventListener(eventName, func);
                }
                else{
                    ele.attachEvent('on' + eventName, func);
                }
            }
            // 显示video的控制面板
            function showControls(){
                videoControls.style.opacity = 1;
            }
            // 隐藏video的控制面板
            function hideControls(){
                // 为了让控制面板一直出现，我把videoControls.style.opacity的值改为1
                videoControls.style.opacity = 1;
            }
            // 控制video的播放
            function play(){
                if ( video.paused || video.ended ){              
                    if ( video.ended ){ 
                        video.currentTime = 0;
                        } 
                    video.play();
                    playBtn.innerHTML = "暂停"; 
                    progressFlag = setInterval(getProgress, 60);
                } 
                else{ 
                    video.pause(); 
                    playBtn.innerHTML = "播放";
                    clearInterval(progressFlag);
                } 
            }
            // 控制video是否全屏，额这一部分没有实现好，以后有空我会接着研究一下
           
            function fullScreen(){
                alert("aa");
                 if (video.requestFullscreen) {

                    video.requestFullscreen();

                } else if (video.mozRequestFullScreen) {

                video.mozRequestFullScreen();

                } else if (video.webkitRequestFullScreen) {

                video.webkitRequestFullScreen();

                }
            }
            // video的播放条
            function getProgress(){
                var percent = video.currentTime / video.duration;
                playProgress.style.width = percent * (progressWrap.offsetWidth) - 2 + "px";
                showProgress.innerHTML = (percent * 100).toFixed(1) + "%";
            }
            // 鼠标在播放条上点击时进行捕获并进行处理
            function videoSeek(e){
                if(video.paused || video.ended){
                    play();
                    enhanceVideoSeek(e);
                }
                else{
                    enhanceVideoSeek(e);
                }

            }
            function enhanceVideoSeek(e){
                clearInterval(progressFlag);
                var length = e.pageX - progressWrap.offsetLeft;
                var percent = length / progressWrap.offsetWidth;
                playProgress.style.width = percent * (progressWrap.offsetWidth) - 2 + "px";
                video.currentTime = percent * video.duration;
                progressFlag = setInterval(getProgress, 60);
            }

        }(this, document))</script>
</html>
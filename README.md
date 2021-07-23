# composer_hufeiyu

## 接口
src/CallBaiduVoice

## 参数 
 - $filename string 文件位置
 - $format string 文件类型，支持amr，wav，pcm
 - $rate int 比率 8000或者16000,不可选其他值
 - $dev_pid int 语言类型：
[1537 ：普通话;
1837 ：四川话;
1637 ：粤语;
1737 ：英语]

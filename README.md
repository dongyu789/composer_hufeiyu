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

## 使用方法

传入指定文件，返回结果

// 成功返回
``` json
{
    "err_no": 0,
    "err_msg": "success.",
    "corpus_no": "15984125203285346378",
    "sn": "481D633F-73BA-726F-49EF-8659ACCC2F3D",
    "result": ["北京天气"]
}

// 失败返回
{
    "err_no": 2000,
    "err_msg": "data empty.",
    "sn": null
}

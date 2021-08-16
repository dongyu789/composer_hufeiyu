<?php

namespace Hufeiyu\CallBaiduVoice;

require_once 'AipSpeech.php';

use AipSpeech;

const APP_ID = '24577284';
const API_KEY = 'tLByba9tpRXrEdugtf2hCdiW';
const SECRET_KEY = 'xzAMkySFA9lfHEL8IYGaLQPZAk2XGY3M';

class CallBaiduVoice
{
    /**
     * @param $filename string 文件位置
     * @param $format string 文件类型，支持amr，wav，pcm
     * @param $rate int 8000或16000
     * @param $dev_pid int 语言类型，1537：普通话，1837：四川话，1637：粤语，1737：英语
     */
    public function voiceConversion($filename, $format, $rate, $dev_pid)
    {
        $client = new AipSpeech(APP_ID, API_KEY, SECRET_KEY);

        $result = $client->asr(file_get_contents($filename), $format, $rate, array(
            'dev_pid' => $dev_pid,
        ));

        return $result;
    }
}

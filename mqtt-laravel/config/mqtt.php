<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 2/22/19
 * Time: 1:29 PM
 */

return [
    'host'      => env('MQTT_HOST', 'pulsar.tu-plovdiv.bg'
    'password'  => env('MQTT_PASSWORD', 'qaz123'),
    'username'  => env('MQTT_USERNAME', 'test'),
    'certfile'  => env('MQTT_CERT_FILE', ''),
    'localcert' => env('MQTT_LOCAL_CERT', ''),
    'localpk'   => env('MQTT_LOCAL_PK', ''),
    'port'      => env('MQTT_PORT', '8883'),
    'timeout'   => (int) env('MQTT_TIMEOUT', 10),
    'debug'     => (bool) env('MQTT_DEBUG', false), //Optional Parameter to enable debugging set it to True
    'qos'       => env('MQTT_QOS', 0), // set quality of service here
    'retain'    => env('MQTT_RETAIN', 0) // it should be 0 or 1 Whether the message should be retained.- Retain Flag
];

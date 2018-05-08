<?php
return [
    'ALIOSS_CONFIG'          => array(
        'KEY_ID'             => 'TUcdNHPnuL2QOdla', // 阿里云oss key_id
        'KEY_SECRET'         => 'ACzUB6cq26eRrgd1z6xCX5RTnPjdb3', // 阿里云oss key_secret
        'END_POINT'          => 'oss-cn-shenzhen.aliyuncs.com', // 阿里云oss endpoint
        'BUCKET'             => 'dqdl2015'  // bucken 名称
    ),
    'NEED_UPLOAD_OSS'        => array( // 需要上传的目录
        '/Upload/avatar',
        '/Upload/cover',
        '/Upload/image/webuploader',
        '/Upload/video',
    ),
];
<?php

class MyFilter extends php_user_filter
{
    public $stream;
    private $previousData;

    public function onCreate(): bool
    {
        $this->stream = fopen('php://temp', 'w+');
        return $this->stream !== false;
    }

    public function filter($in, $out, &$consumed, bool $closing): int
    {
        $data = '';
        while ($bucket = stream_bucket_make_writeable($in)) {
            if ($closing && !$bucket->datalen) {
                return PSFS_FEED_ME;
            }
            $consumed += $bucket->datalen;

            $strFromBucket = $bucket->data;
            if (!empty($this->previousData)) {
                $strFromBucket = $this->previousData . $bucket->data;
                $this->previousData = null;
            }

            if ($strFromBucket[-1] !== "\n") {
                $this->previousData = $strFromBucket;
                return PSFS_FEED_ME;
            }

            $lines =  explode(PHP_EOL, $bucket->data);

            foreach($lines as $line) {
                if (stripos($line, 'ipsum') !== false) {
                    $data .= $line . PHP_EOL;
                    $consumed += strlen($data);
                } else {
                    $consumed += strlen($line);
                }
            }
        }

        $bucketOut = stream_bucket_new($this->stream, $data);
        stream_bucket_append($out, $bucketOut);

        return PSFS_PASS_ON;
    }
}
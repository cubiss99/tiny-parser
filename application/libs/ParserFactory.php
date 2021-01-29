<?php
abstract class ParserFactory
{
    static function parser($type)
    {
        switch ($type) {
            case 'Vietnamnet':
                return new VietnamnetParser();
                break;
            case 'Dantri':
                return new DantriParser();
                break;
            case 'VnExpress':
                return new VnexpressParser();
                break;
        }
    }
}

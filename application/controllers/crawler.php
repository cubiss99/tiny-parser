<?php

class Crawler extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/crawler/index (which is the default page btw)
     */
    public function index()
    {

        // load views
        require_once APP . 'libs/DantriParser.php';
        require_once APP . 'libs/VietnamnetParser.php';
        require_once APP . 'libs/VnexpressParser.php';
        require_once APP . 'libs/ParserFactory.php';

        if (isset($_POST['type'], $_POST['parserUrl'])) {
            $type = $_POST['type'];
            $parserUrl = $_POST['parserUrl'];
            $article = ParserFactory::parser($type);
            $res = $article->articleParserr($this->model, $parserUrl);
            if ($res)
                echo "<script>alert('Thành công !!!');</script>";
            else
                echo "<script>alert('Có lỗi xảy ra !!!');</script>";
        }
        require_once APP . 'views/crawler/index.php';
    }
    public function list()
    {
        // load views
        $listNews = $this->model->getAllArticle();
        require_once APP . 'views/crawler/list.php';
    }
}

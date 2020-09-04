<?php

include_once ROOT. '/models/News.php';
include_once ROOT. '/models/Development'

class NewsController {

	public function actionIndex()
	{
		
		$newsList = array();
		$newsList = News::getNewsList();
		
		$latestNews = array();
		$latestNews = News::getLatestNews(3);

		require_once(ROOT . '/views/news/index.php');

		return true;
	}

	public function actionView($id)
	{
		if ($id) {
			$newsItem = News::getNewsItemByID($id);

	require_once(ROOT . '/views/news/view.php');

/*			echo 'actionView'; */
		}

		return true;

	}

}


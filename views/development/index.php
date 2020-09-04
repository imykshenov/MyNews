<!DOCTYPE HTML>
<!--
	Justice by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
 <? include ROOT.'/views/layouts/header.php';?>
 
 
<!--end header-->
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<span class="date-post"></span>
							<h1 class="mb30"><a href="#">Как создать свой сайт с нуля?</a></h1>
							<p><a href="#" class="text-link">Читать далее</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--end header-->
	
	
	<!--content-->
	<div id="gtco-main">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-12">
					<ul id="gtco-post-list">

						<?php foreach ($newsList as $newsItem):?>
						 
							<li class="full entry animate-box" data-animate-effect="fadeIn"> 
								<a href='/news/<?php echo $newsItem['id']?>'</a>
									<div class="entry-img" style="background-image: url('<? echo $newsItem['preview']?>') "></div> <!-- тут как то надо название картинки из бд взять -->
									<div class="entry-desc">
										<h3><?php echo $newsItem['title']; ?></h3>
										<p><?php echo $newsItem['short_content']; ?></p>
									</div>
								</a>
								<a href="/news/<?php echo $newsItem['id']?>" class="post-meta"><span class="date-posted"><?php echo $newsItem['date'];?></span></a>
							</li>
						
						<?php endforeach;?>

						

				
					</ul>	
				</div>
			</div>
				<!--end content-->	
			<div class="row">
				<div class="col-md-12 text-center">
					<nav aria-label="Page navigation">
					  <ul class="pagination">
					    <li>
					      <a href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					      </a>
					    </li>
					    <li class="active"><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li>
					      <a href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					      </a>
					    </li>
					  </ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

	


	<!--footer-->
	<footer id="gtco-footer" role="contentinfo">
	<div class="container" >
	<div class="row row-pb-md">
		<div class="col-md-12">
			<h3 class="footer-heading">Последние новости</h3>
		</div>
		<div>
			<? foreach ($latestNews as $newsItem):?>
				<div class="col-md-4">
					<div class="post-entry">
						<div class="post-img">
							<a href="/news/<?php echo $newsItem['id']?>"><img src="<?php echo $newsItem['preview']; ?>" class="img-responsive" ></a>
						</div>
						<div class="post-copy">
							<h4><a href="/news/<?php echo $newsItem['id']?>"><?php echo $newsItem['title']; ?></a></h4>
							<a href="/news/<?php echo $newsItem['id']?>" class="post-meta"><span class="date-posted"><?php echo $newsItem['date']; ?></span></a>
						</div>
					</div>
				</div>
			<? endforeach; ?>
		</div>
	</div>
	</div>
	</footer>
	 <? include ROOT. '/views/layouts/footer.php' ;?>


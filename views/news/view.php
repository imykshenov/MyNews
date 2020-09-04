<!DOCTYPE HTML>

<? include ROOT. '/views/layouts/header.php' ;?>

	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_4.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<span class="date-post"><?php echo $newsItem['date'];?></span>
							<h1 class="mb30"><a href='#'><?php echo $newsItem['title'];?></a></h1>
							<p><a href="#" clas s="text-link"><?php echo $newsItem['author_name'];?></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="gtco-maine">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-12">
					<article class="mt-negative">
						<div class="text-left content-article">
							<div class="row">
								<div class="col-lg-8 cp-r animate-box">
									<p><img src="<? echo $newsItem['preview'];?>" width="600" height="300" alt="" /></p>
									<p><?php echo $newsItem['content'];?></p>
								</div>
							<p><a href='/news' class="permalink"> Возврат на главную страницу</a></p>	
							</div>
							
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>




	
	<? include ROOT. '/views/layouts/footer.php' ;?>

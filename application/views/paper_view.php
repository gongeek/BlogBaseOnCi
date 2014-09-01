<!DOCTYPE html>
<html lang="zh">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8"/>
	<title></title>
	<link rel="stylesheet" href="http://localhost/resources/css/style.css"/>
	<style>
		#content article {
			border: none;
		}

		#comment {
			padding-top: 30px;
			margin-top: 50px;
			border-top: 1px solid #a2a749;
			border-bottom: 1px solid #a2a749;
		}

		#comment p {
			position: relative;
			margin-bottom: 15px;
		}

		#comment input {
			position: relative;
			float: right;
			right: 450px;
			top: 0;
			width: 200px;
		}

		#comment textarea {
			vertical-align: top;
			position: relative;
			float: right;
			right: 275px;
			top: 0;
		}

		#comment .you {
			height: 70px;
		}

		#commentBtn {
			height: 30px;
		}

		#commentBtn input {
			position: relative;
			width: 80px;
			float: right;
			right: 575px;
			top: 0;
		}

		.resultS {
			position: relative;
			float: right;
		}

		#comments {
			margin-top: 10px;
		}

		#comments div {
			position: relative;
			margin-bottom: 10px;
		}

		#comments p {
			padding: 10px;
			background: #e7e9c0;
		}

		.commentInfo {
			position: relative;
			right: 10px;
			bottom: 20px;
			font-size: 10px;
			float: right;
		}

	</style>
</head>
<body>
<header id="logo"><h1><a href="http://localhost">Gongeek</a></h1></header>
<nav>
	<ul>
		<li><a href="http://localhost">首页</a></li>
		<li><a href="http://localhost/index.php/index/jswz">技术文章</a></li>
		<li><a href="http://localhost/index.php/index/sbzt">随笔杂谈</a></li>
		<li><a href="#">项目</a></li>
		<li><a href="#">关于</a></li>
		<li id="searchBox">
			<form action="http://localhost/index.php/index/search"
			      method="post">
				<input type="text" name="search" id="search"/><input
					type="submit" id="searchBtn"
					value="搜索"/>
			</form>
		</li>

	</ul>
</nav>
<div id="content">
	<section>
		<?php
			$tags = explode('-', $article->tag);
			$tagsA = '';
			for ($i = 0; $i < (count($tags) - 1); $i++) {
				$url = "http://localhost/index.php/index/searchByTag/{$tags[$i]}";
				$tagsA .= "<a href=$url>{$tags[$i]}</a>";
			}
			echo <<<EOT
				<article><header class="title">
                <h2>{$article->title}</h2>

                <div class="info">
                    <span class="tag">标签：{$tagsA}</span><span
                    class="time">日期：{$article->time}</span>
                </div>

            </header>
            <div class="content">
                {$article->article}
            </div></article>
EOT
		?>
		<div id="comment">
			<form action="http://localhost/index.php/paper/addComment"
			      id="commentForm" method="post">
				<p><label for="name">Name*</label><input type="text"
				                                         name="cname"
				                                         id="name"/>
				</p>

				<p><label for="email">Email*</label><input type="text"
				                                           name="cemail"
				                                           id="email"/>
				</p>

				<p class="you"><label for="youComment">评论*</label><textarea
						cols="50" rows="3"
						name="content"
						id="youComment"></textarea>
				</p>
				<input type="hidden" name="articleid"
				       value="<?php echo $article->id ?>"/>
				<input type="hidden" name="ctime" value="" id="ctime"/>

				<p id="commentBtn"><input id="submit" type="submit"
				                          value="发表评论"/>
				</p>
			</form>
		</div>
		<div id="comments">
			<?php
				foreach ($comments as $comment) {
					echo <<<EOT
				<div>
				<p>{$comment->content}</p>
				<span class="commentInfo">{$comment->cname}发表于{$comment->ctime}</span>
			</div>
EOT;

				}
			?>

		</div>
	</section>
	<aside>
		<div id="moreAboutMe">
			<h3>关注我</h3>
			<ul>
				<li><a class="weibo" href="http://weibo.com/gwiamgw"
				       target="_blank">
						新浪微博</a></li>
				<li>
					<a class="mail" href="mailto:gongweiqm@qq.com"
					   target="_blank">gongweiqm@qq.com</a></li>
				<li>
					<a class="github" href="https://github.com/gongeek"
					   target="_blank">github</a>
				</li>
				<li>
					<a class="sta" href="https://stackoverflow
				.com/users/3416109/gongeek" target="_blank">stackoverflow</a>
				</li>
			</ul>
		</div>
		<div id="randomArticle">
			<h3>随机文章</h3>

		</div>
		<div id="biaoQian">
			<h3>标签</h3>

		</div>
	</aside>
</div>
<div id="top">回顶部</div>
<footer>版权为gongeek所有,欢迎访问 <a href="">www.gongeek.com</a></footer>
<script src="http://localhost/resources/js/index.js"></script>
<script>
	window.addEventListener('load', function () {
		var nowDate = new Date(),
			ctime = document.getElementById('ctime');
		ctime.value = nowDate.getFullYear() + "-" + (nowDate.getMonth() + 1) + "-" + nowDate
			.getDate();
	}, false);
</script>
</body>
</html>
<div class="title">
	صفحه اصلی
</div>

<div class="dialog" style="float: right;">
	<div class="green box">
تهران-لاگ چیست؟
	</div>

گروه کاربران گنو/لینوکس تهران یا «تهران-لاگ» گروهی <b>مستقل</b> از کاربران کامپیوتر علاقه‌مند به <a href="http://www.gnu.org/gnu/linux-and-gnu.fa.html">گنو/لینوکس</a> ساکن تهران است. تم محوری جلسات تهران-لاگ عبارت است از نرم افزار آزاد به صورت عمومی. با این حال، فعالیت‌های متفاوتی از جمله معرفی توزیع‌های آزاد گنو/لینوکسی، معرفی انواع سیستم‌عامل‌های آزاد خانواده‌ی بی-اس-دی، نصب آنها، محتوای آموزشی و حتی بحث آزاد در حوزه‌ی تئوریک نرم افزار آزاد نیز به طور همزمان در این اجتماع دنبال میشوند. در واقع تهران-لاگ یک اجتماع از کاربران نرم افزار آزاد است که مایلند دقایقی را در کنار هم سپری کنند.
<br />
شرکت در جلسات این گروه برای <b>عموم</b> آزاد است.
شما نیز چنانچه علاقه‌مند هستید میتوانید در جلسات آن شرکت کنید و دانش خود را با سایر اعضا به اشتراک گذاشته و یا از دانش آنان استفاده کنید.

<b> برای اطلاعات بیشتر میتوانید عضو <a href="http://lists.tehlug.org/mailman/listinfo/general">لیست پستی</a> گروه شوید.</b>
</div>


<div class="dialog" style="float: left;">
	<div class="orange box">
		برد خبری

		<a href="rss.php">
			<img src="images/rss.png" alt="RSS Feed" title="RSS Feed" style="float: left;" />
		</a>
	</div>

	<ul class="entries">
		<?php
		$next = getNextSession();

		foreach(getEntries(Null, 6) as $entry) {
			echo '<li class="entry">';

			if($entry == $next)
				echo 'جلسه بعدی:';

			echo '<a href="'.$entry->url.'">';

			echo $entry->title;

			echo '</a>';

			if($entry->date)
				echo "<div class='date'>".toPersian($entry->date)."</div>";

			echo '</li>';
		}
		?>
	</ul>
</div>

<div class="clear"></div>

<div class="dialog center" style="float: right;">
	<div class="blue box">
			محل برگزاری جلسات
	</div>
  	<div class="map"></div>
گروه کاربران لینوکس تهران هر دو هفته یکبار در روز سه‌شنبه از ساعت <b>۱۸ الی ۲۰</b> جلسه برگزار میکند.
<b>آدرس محل برگزاری جلسات: یوسف آباد، خیابان ابن سینا، نبش کوچه ۳۱، موسسه کهکشان نور
.</b>
<br />
</div>

<div class="dialog" style="float: left;">
	<div class="yellow box">
			معرفی کتاب و مقالات مفید
	</div>

<div style="width: 90%; text-align: justify; margin-left: auto; margin-right: auto;">
	<img src="images/ingsoc.jpg" style="float: left; margin-right: 15px;" />
دانلود <a href="http://tehlug.org/files/solove.pdf">نسخه‌ای</a> از مقاله‌ی انتقادی
چیزی برای پنهان کردن ندارم و سایر سوءتفاهم‌های مسئله پرایوسی.
در این کتاب دانیل سولوو ضمن توضیح این پاسخ رایج
به بررسی وضعیت پرایوسی پس از وقایع یازدهم سپتامبر در ایالات متحده میپردازد. او ضمن تلاش برای ارائه‌ی تعریفی
از پرایوسی چنین نتیجه میگیرد که تمامی تلاشها برای ارائه‌ی
تعریف جامعی از پرایوسی محکوم به شکستند. پرایوسی یک مسئله نیست، بلکه از مسائل مختلفی
تشکیل شده که لزوماً شبیه به هم نیستند.
او همچنین سعی میکند تعریفی اجتماعی از این مسئله را در مقابل تعاریف رایج شخصی آن قرار دهد.
خواندن این مقاله به همه‌ی کسانی
که به پرایوسی و بررسی خطرات پیش روی ما در دنیای تکنولوژیک علاقه دارند توصیه میشود.
	</div>
</div>

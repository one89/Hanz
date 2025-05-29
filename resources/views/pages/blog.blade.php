@extends('layouts.web')

@section('content')
	<div class="body">
			@include('layouts.header')

			<main role="main" class="main">

				<!-- Page Header -->
				<section
					class="page-header page-header-modern page-header-background page-header-background-md custom-bg-color-grey-1 mb-0"
					style="background-image: url(img/demos/education/backgrounds/page-header.jpg); background-position: 100% 100%;">
					<div class="page-header-content py-5 my-5">
						<div class="container">
							<div class="row mt-5">
								<div class="col align-self-center p-static text-center">
									<h1 class="font-weight-bold text-color-white text-10">Мэдээ мэдээлэл</h1>
								</div>
							</div>
						</div>
				</section>
				<div class="container">
					<div class="row py-3">
						<div class="col">
							<ul class="breadcrumb d-block">
								<li><a href="{{ url('/welcome') }}">Нүүр</a></li>
								<li class="active">Блог</li>
							</ul>
						</div>
					</div>
					<div class="row py-3">
						<div class="col-lg-8 mb-5 mb-lg-0">

							<article class="mb-5">
								<div class="card bg-transparent border-0 custom-border-radius-1">
									<div class="card-body p-0 z-index-1">
										<a href="{{ url('blog-post') }}" data-cursor-effect-hover="plus">
											<img class="card-img-top border-radius-0 mb-2"
												src="{{ asset('img/demos/education/blog-post/zurag 2') }}" alt="Зураг 2">
										</a>
										<p class="text-uppercase text-color-default text-1 my-2">
											<time pubdate datetime="2025-01-10">10 Jan 2025</time>
											<span class="opacity-3 d-inline-block px-2">|</span>
											3 Сэтгэгдэл
											<span class="opacity-3 d-inline-block px-2">|</span>
											М.Мөнх-Эрдэнэ
										</p>
										<div class="card-body p-0">
											<h4 class="card-title text-5 font-weight-semi-bold pb-1 mb-2">
												<a
													class="text-color-secondary text-color-hover-primary text-decoration-none text-4">
													ЗУНЫ АМРАЛТАА ХЯТАД УЛСАД ӨНГӨРҮҮЛЦГЭЭЕ
												</a>
											</h4>
											<p class="card-text mb-2">
												🎓 Зуны хятад хэлний сургалт + аялал! 🇨🇳
												Алдартай хотуудаар аялангаа хэлний мэдлэгээ сайжруулаарай!
												Зуныг дурсамжтай, мэдлэгтэй өнгөрүүлцгээе!
												📍 Байршил ба хугацаа:
												Тяньжин хот – 25 хоног,
												Далиан хот – 14 хоног,
												Ордос хот – 14 хоног,
												✏️ Хөтөлбөрийн агуулга:
												Хятад хэлний эрчимжүүлсэн сургалт,
												Өдөр тутмын харилцаа, бичгийн чадвар,
												Хятад соёл, уламжлалтай танилцах,
												Аялал, соёлын арга хэмжээ,
												✅ Хэнд зориулагдсан вэ?
												13+ насны бүх хүмүүс,
												Хятад хэл сурах хүсэлтэй хүн бүр,
												Хятадад сурах, ажиллах сонирхолтой залуус,
												⭐ Сургалтын давуу талууд:
												Туршлагатай хятад багш нар,
												Олон улсын оюутнуудтай хамт сурах боломж,
												Аюулгүй орчин, хөтөчтэй аялал,
												Хэлний мэдлэгээ богино хугацаанд ахиулах.
											</p>
										</div>
									</div>
								</div>
							</article>

							<article class="mb-5">
								<div class="card bg-transparent border-0 custom-border-radius-1">
									<div class="card-body p-0 z-index-1">
										<img class="card-img-top border-radius-0 mb-2"
											src="{{ asset('img/demos/education/blog-post/zurag 1') }}" alt="Зураг 1">
										<p class="text-uppercase text-color-default text-1 my-2">
											<time pubdate datetime="2025-01-10">10 Jan 2025</time>
											<span class="opacity-3 d-inline-block px-2">|</span>
											3 Сэтгэгдэл
											<span class="opacity-3 d-inline-block px-2">|</span>
											М.Мөнх-Эрдэнэ
										</p>
										<div class="card-body p-0">
											<h4 class="card-title text-5 font-weight-semi-bold pb-1 mb-2">
												<a
													class="text-color-secondary text-color-hover-primary text-decoration-none text-4">
													Пандора аялал – Хамгийн хямд 4-р ээлж! 🎉
													🌍 ZHANGJIAJIE гайхалтай хөтөлбөртэй аялал дахин зарлагдлаа!
												</a>
											</h4>
											<p class="card-text mb-2">
												🗺️ Аяллын товч мэдээлэл:
												🗓 Аяллын хугацаа: 6 өдөр 7 шөнө
												📍 Маршрут: Эрээн – Чангша – Жанжиажэ
												🚄✈️ Унаа: Галт тэрэг + Онгоц + Автобус
												👥 Байгууллага, хамт олноор хөнгөлөлттэй
												🌟 Үзэх газрууд:
												Тэнгэрийн хаалга
												Аватар киноны зураг авалт болсон газар
												Шилэн гүүр, шилэн тавцан
												Шар луу агуй
												326м цахилгаан шат, 7455м дүүжин зам
												Байгалийн цагаан хэрэм, модон зам
												Үндэсний хоол, “У Ган Жун” цэцэрлэгт хүрээлэн
												✅ Аялалд багтсан:
												2 талдаа нислэгтэй газар + агаарын хосолсон аялал
												Зочид буудал, хоол, тасалбарууд
												Хөтөч орчуулагч, тосох үдэх тээвэр
												Аяллын иж бүрэн даатгал
											</p>
										</div>
									</div>
								</div>
							</article>

							<article class="mb-5">
								<div class="card bg-transparent border-0 custom-border-radius-1">
									<div class="card-body p-0 z-index-1">
										<a href="{{ url('blog-post') }}" data-cursor-effect-hover="plus">
											<img class="card-img-top border-radius-0 mb-2"
												src="{{ asset('img/demos/education/blog-post/zurag 3') }}" alt="Зураг 3">
										</a>
										<p class="text-uppercase text-color-default text-1 my-2">
											<time pubdate datetime="2025-01-15">15 Jan 2025</time>
											<span class="opacity-3 d-inline-block px-2">|</span>
											5 Сэтгэгдэл
											<span class="opacity-3 d-inline-block px-2">|</span>
											Б.Энхсайхан
										</p>
										<div class="card-body p-0">
											<h4 class="card-title text-5 font-weight-semi-bold pb-1 mb-2">
												<a
													class="text-color-secondary text-color-hover-primary text-decoration-none text-4">
													Хятад улсад ТЭТГЭЛЭГТЭЙ суралцаарай
												</a>
											</h4>
											<p class="card-text mb-2">
												БНХАУ-ын ТОМООХОН ХОТУУДАД 1+4 Бакалаврын 100% тэтгэлэгт,
												ХЭЛНИЙ БЭЛТГЭЛ-ийн тэтгэлэгт суралцах хөтөлбөртөө элсэлт авч эхэллээ.🇨🇳
												✅ХЭЛНИЙ ОНОО ШААРДАХГҮЙ
												✅ХЭЛНИЙ БЭЛТГЭЛТЭЙ
												✅БНХАУ-ЫН 8 ИХ СУРГУУЛЬ
												✅ХҮССЭН МЭРГЭЖИЛЭЭРЭЭ
												ҮНЭГҮЙ ТӨЛБӨР-гүй сурангаа сар бүр 2500 юаны стипенд авах боломжтой!
												Хүний тоо хязгаартай тул та яараарай!
												💡Бид түргэн шуурхай, мэргэжлийн дагуу материал бүрдүүлэлт хийнэ.
												💡100% тэтгэлэгтэй суралцах бол сар бүр 2500 юань тэтгэлэг олгоно.
												📑Дэлгэрэнгүй мэдээлэл авах бол :
												+976 99907748, 99991573, 89909010 утсаар холбогдох болон чатаар мэдээлэл
												авах боломжтой.
												🏢 🗺 ХАЯГ 1: СБД 8-р хороо Хөгжим бүжгийн замын эсрэг талд Голомт банктай
												байрны 6 давхарт 602 тоот
												🏢🗺 ХАЯГ 2: Говьсүмбэр аймаг сүмбэр сүм төмөр замд хятад хоолны газрын
												эсрэг талд байрлаж байна
												🏢 🗺 ХАЯГ 3: Дорнод аймаг Ханз академийн зүүн бүсийн төлөөлөгчийн газар
												"Жигүүр гадаад хэлний сургалт орчуулгын төв" “ХАНЗ АКАДЕМИ”
											</p>
										</div>
									</div>
								</div>
							</article>

							<article class="mb-5">
								<div class="card bg-transparent border-0 custom-border-radius-1">
									<div class="card-body p-0 z-index-1">
										<a href="{{ url('blog-post') }}" data-cursor-effect-hover="plus">
											<img class="card-img-top border-radius-0 mb-2"
												src="{{ asset('img/demos/education/blog-post/zurag 4') }}" alt="Зураг 4">
										</a>
										<p class="text-uppercase text-color-default text-1 my-2">
											<time pubdate datetime="2025-01-20">20 Jan 2025</time>
											<span class="opacity-3 d-inline-block px-2">|</span>
											2 Сэтгэгдэл
											<span class="opacity-3 d-inline-block px-2">|</span>
											Г.Эрдэнэбат
										</p>
										<div class="card-body p-0">
											<h4 class="card-title text-5 font-weight-semi-bold pb-1 mb-2">
												<a
													class="text-color-secondary text-color-hover-primary text-decoration-none text-4">
													богино хугацааны эрчимжүүлсэн сургалт
												</a>
											</h4>
											<p class="card-text mb-2">
												БҮРТГЭЛИЙН ХУГАЦАА 2025.05.30 ХҮРТЭЛ ⌛️
												14 хоногийн хугацаанд хятад хэлийг орчинд нь суралцангаа хоттой танилцах,
												аялах боломжийг танд олгож байна.
												14 хоногийн хөтөлбөрт:
												✨СУРГАЛТЫН ТӨЛБӨР
												✨ДОТУУР БАЙР
												✨ЗАМЫН ЗАРДАЛ
												✨АЯЛЛЫН ҮЗВЭР ҮЙЛЧИЛГЭЭНИЙ ТӨЛБӨР зэрэг багтсан
												ДАВУУ ТАЛ:
												⚡️АЮУЛГҮЙ БАТАЛГААТАЙ
												⚡️10 ЖИЛИЙН ТУРШЛАГАТАЙ
												⚡️ ХЯТАД БАГШ НАР ЗААНА
												⚡️ХОТЫН ТӨВД БАЙРЛАЛТАЙ
												⚡️13-60 НАС /ГЭР БҮЛЭЭРЭЭ ЯВЖ БОЛНО/
												⚡️АЯЛЛЫН ХӨТӨЧТЭЙ
												⚡️АНГИ ХАМТ ОЛНООРОО АЯЛАХ БОЛОМЖТОЙ
												Хөтөлбөр үргэлжлэх хугацаа: 2025/07/20-2025/08/02
												✅Хятад улсад суралцах хүсэлтэй сурахаар зорьж буй хүн бүхэн дэлгэрэнгүй
												мэдээлэл зөвлөгөө авах боломжтой.
												🏢Салбар1: СБД 8-р хороо Maison барилга 6 давхарт 602 тоот
												☎️Холбогдох утас: +976 99991573, 99907748, 89909010
												🏢Салбар2: Говьсүмбэр аймаг Төмөр замын хятад хоолны газрын эсрэг талд Ханз
												академи
												☎️Холбогдох утас: +976 99870840
												🏢Салбар3: Дорнод аймаг Ханз академийн зүүн бүсийн төлөөлөгчийн газар Жигүүр
												гадаад хэлний сургалт, орчуулгын төв
												☎️ Холбогдох утас: +976 8888 9486
											</p>
										</div>
									</div>
								</div>
							</article>

							<ul
								class="custom-pagination-style-1 pagination pagination-rounded pagination-md justify-content-center">
								<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a>
								</li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
								</li>
							</ul>

						</div>
						<div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 mb-5">
							<aside class="sidebar">
								<div class="px-3 mb-4">
									<h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0 mb-3">
										БНХАУ дахь Вакумжуулсан сургалт
									</h3>
									<p class="m-0">
										БНХАУ-ын Тяньжин хот болон Хужоу мужид мэргэжлийн Хятад багшаар удирдуулж 7-н
										Хонгоос 1 сарын хугацаанд сонгон суралцах боломжтой.
									</p>
								</div>
								<div class="py-1 clearfix">
									<hr class="my-2">
								</div>
								<div class="px-3 mt-4">
									<form action="{{ url('page-search-results') }}" method="get">
										<div class="input-group">
											<input type="text"
												class="form-control form-control-lg bg-color-light-2 border-0" name="search"
												placeholder="Блог хайх..." required>
											<div class="input-group-append">
												<button class="btn btn-primary text-color-light font-weight-semibold"
													type="submit"><i class="fas fa-search"></i></button>
											</div>
										</div>
									</form>
								</div>
								<div class="py-1 clearfix">
									<hr class="my-2">
								</div>
								<div class="px-3 mt-4">
									<h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0 mb-3">
										Хөтөлбөрийн агуулга
									</h3>
									<div class="pb-2 mb-1">
										<a href="#"
											class="text-color-secondary text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">
											Хятад хэлний эрчимжүүлсэн сургалт
										</a>
										<a href="#"
											class="text-color-secondary text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">
											Өдөр тутмын харилцаа, бичгийн чадвар тусгаж,
										</a>
										<a href="#"
											class="text-color-secondary text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">
											Хятад соёлын хичээл, уламжлалтай танилцах
										</a>
									</div>
								</div>
								<div class="py-1 clearfix">
									<hr class="my-2">
								</div>
								<div class="px-3 mt-4">
									<h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0 mb-3">
										Комментууд
									</h3>
									<div class="pb-2 mb-1">
										<a href="#"
											class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">
											М. Мөнхцэцэг
											<strong class="text-color-secondary text-hover-primary text-4">
												Жинхэнэ суралцахуй бол сониуч зан боломжтой учрах үед бий болдог.
											</strong>
											<span class="text-uppercase text-1 d-block pt-1 pb-3">2025 оны 1-р сарын
												10</span>
										</a>

										<a href="#"
											class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">
											М. Мөнхцэцэг
											<strong class="text-color-secondary text-hover-primary text-4">
												"Хамгийн сайн боловсрол нь хэрхэн сэтгэхийг заадаг, юу бодохыг биш
											</strong>
											<span class="text-uppercase text-1 d-block pt-1 pb-3">2025 оны 1-р сарын
												10</span>
										</a>

										<a href="#"
											class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">
											М. Мөнхцэцэг
											<strong class="text-color-secondary text-hover-primary text-4">
												Сайн боловсрол хаалгыг нээдэг, агуу боловсрол оюун ухааныг нээдэг
											</strong>
											<span class="text-uppercase text-1 d-block pt-1 pb-3">2025 оны 1-р сарын
												10</span>
										</a>
									</div>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</main>
			@include('layouts.footer')
		</div>
	</div>
	@push('styles')
		<link rel="stylesheet" href="{{ asset('vendor/plugins/css/plugins.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/jquery.countdown/jquery.countdown.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme.init.css') }}">
	@endpush
	@push('scripts')
		<script src="{{ asset('vendor/plugins/js/plugins.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>
		<script src="{{ asset('js/theme.js') }}"></script>
		<script src="{{ asset('js/custom.js') }}"></script>
		<script src="{{ asset('js/theme.init.js') }}"></script>
	@endpush
@endsection
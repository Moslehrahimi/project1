@extends('master.master')

@section('pagetitle')
@section('content')
    <section class="hero-banner text-center">
        <div class="container">
            <p class="text-uppercase">یک شرکت با فضایی عالی</p>
            <h1>فضای میزبانی قدرتمند</h1>
            <p class="hero-subtitle">برای برپاسازی یک سایت، اول از همه نیاز به یک مکان روی اینترنت داریم که بتوانیم فایل‌های
                سایت را روی آن بریزیم. </p>
            <a class="button button-outline" href="#">شروع</a>
        </div>
    </section>


    <section class="bg-gray domain-search">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-3 col-lg-2 text-center text-md-right mb-3 mb-md-0">
                    <h3>نام دامین خود را جستجو کنید!</h3>
                </div>
                <div class="col-md-9 col-lg-10 pl-2 pl-xl-5">
                    <form class="form-inline flex-nowrap form-domainSearch">
                        <div class="form-group">
                            <label for="staticDomainSearch" class="sr-only">جستجو دامنه</label>
                            <input type="text" class="form-control" id="staticDomainSearch"
                                placeholder="نام دامنه را وارد کنید">
                        </div>
                        <button type="submit" class="button rounded-0">جستجو</button>
                    </form>
                    <ul class="domain-check">
                        <li class="checkbox-style">
                            <input type="checkbox" id="check1">
                            <label for="check1">.com <span class="dollar-hint">(60 تومان)</span></label>
                        </li>
                        <li class="checkbox-style">
                            <input type="checkbox" id="check2">
                            <label for="check2">.net <span class="dollar-hint">(70 تومان)</span></label>
                        </li>
                        <li class="checkbox-style">
                            <input type="checkbox" id="check3">
                            <label for="check3">.org <span class="dollar-hint">(100 تومان)</span></label>
                        </li>
                        <li class="checkbox-style">
                            <input type="checkbox" id="check4">
                            <label for="check4">.ir <span class="dollar-hint">(6 تومان)</span></label>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>


    <section class="section-margin">
        <div class="container">
            <div class="text-center">
                <h3 class="client-logo-title">ما بیش از 12000+ مشتری راضی داریم</h3>
            </div>
            <div class="owl-carousel owl-theme logo-carousel owl-rtl">
                <div class="logo-carousel-item">
                    <img class="img-fluid" src="front/pics/home/brand-logo1.png" alt="">
                </div>
                <div class="logo-carousel-item">
                    <img class="img-fluid" src="front/pics/home/brand-logo2.png" alt="">
                </div>
                <div class="logo-carousel-item">
                    <img class="img-fluid" src="front/pics/home/brand-logo3.png" alt="">
                </div>
                <div class="logo-carousel-item">
                    <img class="img-fluid" src="front/pics/home/brand-logo4.png" alt="">
                </div>
                <div class="logo-carousel-item">
                    <img class="img-fluid" src="front/pics/home/brand-logo5.png" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="section-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card-feature card-feature-content">
                        <h2>فضای میزبانی مورد نظر خود را انتخاب کنید</h2>
                        <p>این فضا معمولاً یک رایانه است که اندکی با رایانه‌های خانگی متفاوت است. این رایانه که سرور
                            (Server) نام دارد، همیشه به اینترنت متصل است و دارای یک نشانی IP ثابت می‌باشد</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-feature text-center">
                        <div class="feature-icon">
                            <img src="front/pics/home/png/001-unlock.png" alt="">
                        </div>
                        <h3>سرور امن</h3>
                        <p>برای برپاسازی یک سایت، اول از همه نیاز به یک مکان روی اینترنت داریم که بتوانیم فایل‌های سایت را
                            روی آن بریزیم</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-feature text-center">
                        <div class="feature-icon">
                            <img src="front/pics/home/png/002-shield.png" alt="">
                        </div>
                        <h3>پشتیبان گیری</h3>
                        <p>این فضا معمولاً یک رایانه است که اندکی با رایانه‌های خانگی متفاوت است. این رایانه که سرور
                            (Server) نام دارد</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-feature text-center">
                        <div class="feature-icon">
                            <img src="front/pics/home/png/003-pencil.png" alt="">
                        </div>
                        <h3>شخصی سازی</h3>
                        <p>همیشه به اینترنت متصل است و دارای یک نشانی IP ثابت می‌باشد تا همیشه بتوان از طریق رایانه‌های دیگر
                            به آن دسترسی داشت. </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-feature text-center">
                        <div class="feature-icon">
                            <img src="front/pics/home/png/004-home-page.png" alt="">
                        </div>
                        <h3>انتقال رایگان</h3>
                        <p> از نرم افزارهای خاصی هم بهره می‌برد که بتواند فایل‌های سایت را تبدیل به صفحات اینترنتی کند و
                            خدمات جانبی را هم به صاحب سایت بدهد.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-feature text-center">
                        <div class="feature-icon">
                            <img src="front/pics/home/png/005-headset.png" alt="">
                        </div>
                        <h3>پشیتیبانی آنلاین</h3>
                        <p> هاست هم نام برده می‌شود که در اصل اگر Host را به فارسی برگردانی کنیم، همان معنی و مفهوم فضای
                            میزبانی را می‌دهد.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-padding priceTable-bg">
        <div class="container">
            <div class="section-intro-white pb-85px text-center">
                <h2>بسته های قیمت گذاری محبوب</h2>
                <div class="section-style"></div>
            </div>

            <div class="priceTable-relative">
                <div class="priceTable-wrapper">
                    <div class="row">

                        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="card text-center card-pricing">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/181.webp"
                                        class="card-img-top" alt="Waterfall" />

                                </div>
                                <ul class="card-pricing--list">
                                    <li>بارگزاری 100 وب سایت</li>
                                    <li>فضای میزبانی 400 مگ</li>

                                </ul>
                                <div class="card-pricing--footer">
                                    <button class="button">انتخاب</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="card text-center card-pricing">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/181.webp"
                                        class="card-img-top" alt="Waterfall" />

                                </div>
                                <ul class="card-pricing--list">
                                    <li>بارگزاری 100 وب سایت</li>
                                    <li>فضای میزبانی 400 مگ</li>

                                </ul>
                                <div class="card-pricing--footer">
                                    <button class="button">انتخاب</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="card text-center card-pricing">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/181.webp"
                                        class="card-img-top" alt="Waterfall" />

                                </div>
                                <ul class="card-pricing--list">
                                    <li>بارگزاری 100 وب سایت</li>
                                    <li>فضای میزبانی 400 مگ</li>

                                </ul>
                                <div class="card-pricing--footer">
                                    <button class="button">انتخاب</button>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section-margin mb-5 pt-xl-235">
        <div class="container">
            <div class="section-intro pb-85px text-center">
                <h2>سرویس های با کیفیت</h2>
                <div class="section-style"></div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card-service text-center">
                        <div class="service-icon">
                            <img src="front/pics/home/png/006-server.png" alt="">
                        </div>
                        <h3>فضای میزبانی ابری ssd</h3>
                        <p>بسته به کیفیت و منابع سخت افزاری هاست، انتخاب‌های زیادی پیش رو دارید که می‌توانید بسته به نیاز
                            خود یک انتخاب را داشته باشید. علاوه بر آن شرکت‌ها و ارائه کنندگان بسیاری هستند</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card-service text-center">
                        <div class="service-icon">
                            <img src="front/pics/home/png/004-home-page.png" alt="">
                        </div>
                        <h3>انتقال رایگان دامین</h3>
                        <p>برخی از آنها معروف‌تر هستند، برخی دیگر هنوز نوپا هستند و در حال پیشرفت، برخی دیگر از نظر پشتیبانی
                            شناخته‌تر هستند. </p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card-service text-center">
                        <div class="service-icon">
                            <img src="front/pics/home/png/007-server-1.png" alt="">
                        </div>
                        <h3>بهترین فضای میزبانی</h3>
                        <p> این رایانه که سرور (Server) نام دارد، همیشه به اینترنت متصل است و دارای یک نشانی IP ثابت می‌باشد
                            تا همیشه بتوان از طریق رایانه‌های دیگر به آن دسترسی داشت.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card-service text-center">
                        <div class="service-icon">
                            <img src="front/pics/home/png/002-shield.png" alt="">
                        </div>
                        <h3>پشتیبان گیری قوی</h3>
                        <p>این رایانه از نرم افزارهای خاصی هم بهره می‌برد که بتواند فایل‌های سایت را تبدیل به صفحات اینترنتی
                            کند و خدمات جانبی را هم به صاحب سایت بدهد. </p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card-service text-center">
                        <div class="service-icon">
                            <img src="front/pics/home/png/008-mail.png" alt="">
                        </div>
                        <h3>سرویس ایمیل</h3>
                        <p>در اولین گام پس از ثبت دامنه یا نشانی اینترنتی، باید یک فضای میزبانی را هم تهیه کند. این فضا را
                            معمولاً شرکت‌های ارائه دهندۀ فضای میزبانی یا هاستینگ (Hosting) می‌فروشند.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card-service text-center">
                        <div class="service-icon">
                            <img src="front/pics/home/png/009-art.png" alt="">
                        </div>
                        <h3>آنالیز داده ها</h3>
                        <p>یعنی شما یک فضایی را برای مدت یک سال یا حتی چند ماه اجاره می‌کنید و سایت خود را روی آن برپا
                            می‌کنید.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="bg-gray section-padding">
        <div class="container">
            <div class="section-intro pb-5 mb-xl-2 text-center">
                <h2 class="mb-4">در خبرنامه ما عضو شوید</h2>
                <p>با عضویت در خبرنامه از جدیدترین مطالب ما با خبر شوید</p>
            </div>

            <form class="form-subscribe" action="#">
                <div class="input-group align-items-center">
                    <input type="text" class="form-control" placeholder="ایمیل خود را وارد کنید" required>
                    <div class="input-group-append">
                        <button class="button button-shadow2" type="submit">عضویت</button>
                    </div>
                </div>
            </form>
        </div>
    </section>




    <section class="section-margin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <h2 class="mb-4">سرور <br class="d-none d-xl-block"> اختصاصی و امن <br
                            class="d-none d-xl-block"> برای سایت شما</h2>
                    <p>بسته به کیفیت و منابع سخت افزاری هاست، انتخاب‌های زیادی پیش رو دارید که می‌توانید بسته به نیاز خود یک
                        انتخاب را داشته باشید. علاوه بر آن شرکت‌ها و ارائه کنندگان بسیاری هستند که هر کدام با شرایط خاص خود
                        اقدام به خدمات هاستینگ می‌کنند. </p>
                </div>
                <div class="col-lg-7">
                    <div class="text-center">
                        <img class="img-fluid" src="front/pics/home/server.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="bg-gray section-padding">
        <div class="container">
            <div class="section-intro pb-85px text-center">
                <h2>نظر مشتریان راضی ما</h2>
                <div class="section-style"></div>
            </div>

            <div class="owl-carousel owl-theme testimonial">
                <div class="testimonial-item">
                    <div class="media">
                        <img class="testimonial-img" src="front/pics/testimonial/testimonial1.png" alt="">
                        <div class="media-body">
                            <p>نرم‌افزارهای مورد نیاز برای مدیریت بخشهای مختلف سایت و پست الکترونیک و… را در اختیار صاحبان
                                وب سایتها قرار دهد.نرم‌افزارهای مورد نیاز برای مدیریت بخشهای مختلف سایت و پست الکترونیک </p>
                            <h4>محمد امینی</h4>
                            <p class="testi-intro">سئو و مدیریت محتوا</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="media">
                        <img class="testimonial-img" src="front/pics/testimonial/testimonial2.png" alt="">
                        <div class="media-body">
                            <p>هر شخصی که نرم‌افزارهای لازم و دسترسی به این فایلها را داشته باشد امکان بازدید از این سایت را
                                دارد. حال برای اینکه همه مردم امکان دسترسی به فایلها را داشته باشند نیاز است</p>
                            <h4>علی احمدی</h4>
                            <p class="testi-intro">بنیان گزار کسب و کار</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="media">
                        <img class="testimonial-img" src="front/pics/testimonial/testimonial3.png" alt="">
                        <div class="media-body">
                            <p>در صورتی که حجم قابل توجهی از بازدیدکننده به سایت مراجعه کنند امکان پاسخگویی به همه آن‌ها را
                                داشته باشد. بنابراین نیاز است تا یک کامپیوتر قدرتمند از لحاظ مشخصات قطعات داخلی باشد</p>
                            <h4>جواد عزتی</h4>
                            <p class="testi-intro">برناه نویس</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="media">
                        <img class="testimonial-img" src="front/pics/testimonial/testimonial2.png" alt="">
                        <div class="media-body">
                            <p>نرم‌افزارهای مورد نیاز برای مدیریت بخشهای مختلف سایت و پست الکترونیک و… را در اختیار صاحبان
                                وب سایتها قرار دهد.نرم‌افزارهای مورد نیاز برای مدیریت بخشهای مختلف سایت و پست الکترونیک </p>
                            <h4>علی اصغری</h4>
                            <p class="testi-intro">طراح گرافیک</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="media">
                        <img class="testimonial-img" src="front/pics/testimonial/testimonial3.png" alt="">
                        <div class="media-body">
                            <p>هر کامپیوتری می‌تواند یک سرور باشد اما از آنجا که هزینه‌های مورد نیاز برای فراهم کردن تجهیزات
                                و نرم‌افزارهای لازم یا نیروی پشتیبانی برای صاحبان همه وبگاه‌ها به صرفه نیست .</p>
                            <h4>سجاد کلانتری</h4>
                            <p class="testi-intro">طراح</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="media">
                        <img class="testimonial-img" src="front/pics/testimonial/testimonial2.png" alt="">
                        <div class="media-body">
                            <p>سرویسهای میزبانی وب بر اساس نوع سیستم‌عاملی که بر روی سرورها نصب می‌باشد و طبیعتاً
                                نرم‌افزارها و فایلهایی را که پشتیبانی می‌کنند شاخه بندی می‌شوند. مانند هُست ویندوز…</p>
                            <h4>علی کریمی</h4>
                            <p class="testi-intro">برنامه نویس</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

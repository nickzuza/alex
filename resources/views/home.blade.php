@extends('layout')
@section('meta')

@stop
@section('content')
    <div id="main">
        <section class="main-slider">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="logo"></div>
                        <div class="phone">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" width="28px" height="28px">
                                        <g>
                                            <path d="M42.595,0H17.405C14.977,0,13,1.977,13,4.405v51.189C13,58.023,14.977,60,17.405,60h25.189C45.023,60,47,58.023,47,55.595   V4.405C47,1.977,45.023,0,42.595,0z M15,8h30v38H15V8z M17.405,2h25.189C43.921,2,45,3.079,45,4.405V6H15V4.405   C15,3.079,16.079,2,17.405,2z M42.595,58H17.405C16.079,58,15,56.921,15,55.595V48h30v7.595C45,56.921,43.921,58,42.595,58z" fill="#FFFFFF"/>
                                            <path d="M30,49c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S32.206,49,30,49z M30,55c-1.103,0-2-0.897-2-2s0.897-2,2-2   s2,0.897,2,2S31.103,55,30,55z" fill="#FFFFFF"/>
                                            <path d="M26,5h4c0.553,0,1-0.447,1-1s-0.447-1-1-1h-4c-0.553,0-1,0.447-1,1S25.447,5,26,5z" fill="#FFFFFF"/>
                                            <path d="M33,5h1c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1c-0.553,0-1,0.447-1,1S32.447,5,33,5z" fill="#FFFFFF"/>
                                            <path d="M56.612,4.569c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c3.736,3.736,3.736,9.815,0,13.552   c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293   C61.128,16.434,61.128,9.085,56.612,4.569z" fill="#FFFFFF"/>
                                            <path d="M52.401,6.845c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c1.237,1.237,1.918,2.885,1.918,4.639   s-0.681,3.401-1.918,4.638c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293   c1.615-1.614,2.504-3.764,2.504-6.052S54.017,8.459,52.401,6.845z" fill="#FFFFFF"/>
                                            <path d="M4.802,5.983c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-4.516,4.516-4.516,11.864,0,16.38   c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414   C1.065,15.799,1.065,9.72,4.802,5.983z" fill="#FFFFFF"/>
                                            <path d="M9.013,6.569c-0.391-0.391-1.023-0.391-1.414,0c-1.615,1.614-2.504,3.764-2.504,6.052s0.889,4.438,2.504,6.053   c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414   c-1.237-1.237-1.918-2.885-1.918-4.639S7.775,9.22,9.013,7.983C9.403,7.593,9.403,6.96,9.013,6.569z" fill="#FFFFFF"/>
                                        </g>
                                    </svg>
                            <div class="column">
                                <div class="row">
                                    <div class="number">
                                        +373 <b>69 900-989</b>
                                    </div>
                                    <div class="number">
                                        +373 <b>22 244-572</b>
                                    </div>
                                </div>
                                <div class="row">
                                    <span class="call-back" @click="callBack = true">Заказать обратный звонок</span>
                                </div>
                            </div>

                        </div>
                        <div class="place">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;" xml:space="preserve" width="26" height="35">
                                        <g>
                                            <path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5   s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z" fill="#FFFFFF"/>
                                            <path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952   L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4   C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031   C45.576,13.08,46.321,24.468,41.099,31.431z" fill="#FFFFFF"/>
                                        </g>
                                    </svg>
                            <div class="column">
                                <div class="address row">мун. Кишинев,</div>
                                <div class="address row">ул. Ион Прункул, 4/1</div>
                            </div>
                        </div>
                        <ul class="lang">
                            <li class="active">RU</li>
                            <li>RO</li>
                        </ul>
                    </div>
                </div>
                <modal v-if="callBack" v-on:close="callBack = false" v-cloak class="modal-base callback mobilemenu">
                    <div class="modal-title">Мы Вам перезвоним</div>
                    <div class="modal-input">
                        <input type="text"
                               v-model="call.name"
                               placeholder="Ваше имя"
                               v-validate="'required|min:2|max:30'"
                               name="form1_name"
                               v-model.lazy="call.name"
                               data-vv-validate-on="none"
                               :class="{ error: errors.has('form1_name')}"
                               v-on:focus="removeError('form1_name');"
                        >
                        <div class="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="26px" height="26px" viewBox="0 0 29.731 29.731" style="enable-background:new 0 0 29.731 29.731;" xml:space="preserve">
                                <g>
                                    <path d="M23.895,29.731c-1.237,0-2.731-0.31-4.374-0.93c-3.602-1.358-7.521-4.042-11.035-7.556   c-3.515-3.515-6.199-7.435-7.558-11.037C-0.307,6.933-0.31,4.245,0.921,3.015c0.177-0.177,0.357-0.367,0.543-0.563   c1.123-1.181,2.392-2.51,4.074-2.45C6.697,0.05,7.82,0.77,8.97,2.201c3.398,4.226,1.866,5.732,0.093,7.478l-0.313,0.31   c-0.29,0.29-0.838,1.633,4.26,6.731c1.664,1.664,3.083,2.882,4.217,3.619c0.714,0.464,1.991,1.166,2.515,0.642l0.315-0.318   c1.744-1.769,3.25-3.296,7.473,0.099c1.431,1.15,2.15,2.272,2.198,3.433c0.069,1.681-1.27,2.953-2.452,4.075   c-0.195,0.186-0.385,0.366-0.562,0.542C26.103,29.424,25.126,29.731,23.895,29.731z M5.418,1C4.223,1,3.144,2.136,2.189,3.141   C1.997,3.343,1.811,3.539,1.628,3.722C0.711,4.638,0.804,7.045,1.864,9.856c1.31,3.472,3.913,7.266,7.33,10.683   c3.416,3.415,7.208,6.018,10.681,7.327c2.811,1.062,5.218,1.152,6.133,0.237c0.183-0.183,0.379-0.369,0.581-0.56   c1.027-0.976,2.192-2.082,2.141-3.309c-0.035-0.843-0.649-1.75-1.825-2.695c-3.519-2.83-4.503-1.831-6.135-0.176l-0.32,0.323   c-0.78,0.781-2.047,0.608-3.767-0.51c-1.193-0.776-2.667-2.038-4.379-3.751c-4.231-4.23-5.584-6.819-4.26-8.146l0.319-0.315   c1.659-1.632,2.66-2.617-0.171-6.138C7.245,1.651,6.339,1.037,5.496,1.001C5.47,1,5.444,1,5.418,1z"/>
                                </g>
                            </svg>
                        </div>


                    </div>
                    <div class="modal-input">
                        <input type="text"
                               placeholder="E-mail или номер телефона"
                               v-validate="'required'"
                               name="form1_email"
                               v-model.lazy="call.email"
                               data-vv-validate-on="none"
                               :class="{ error: errors.has('form1_email')}"
                               v-on:focus="removeError('form1_email');"
                        >
                        <div class="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="26px" height="32px" viewBox="0 0 747.541 747.541" style="enable-background:new 0 0 747.541 747.541;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M622.242,747.541H125.29c-31.708,0-57.512-25.805-57.512-57.537V554.809c-0.099-11.412,3.236-22.604,9.635-32.227    c25.52-38.303,66.38-67.85,121.434-87.859c49.89-18.158,112.009-28.139,174.906-28.139s125.016,9.992,174.919,28.139    c54.695,19.861,95.371,49.174,120.902,87.094c6.621,9.475,10.19,20.838,10.19,32.684v135.529    C679.778,721.736,653.961,747.541,622.242,747.541z M373.766,431.275c-60.093,0-119.198,9.475-166.47,26.645    c-50.001,18.182-86.774,44.529-109.316,78.336c-3.644,5.498-5.559,11.883-5.497,18.455v135.293    c0,18.096,14.711,32.82,32.808,32.82h496.939c18.108,0,32.832-14.725,32.832-32.82V554.488c0-6.756-2.025-13.217-5.854-18.701    c-22.679-33.684-59.303-59.809-108.983-77.867C492.976,440.75,433.846,431.275,373.766,431.275z M373.766,386.129    c-86.28,0-159.183-97.607-159.183-213.149C214.583,45.443,296.812,0,373.766,0C450.719,0,532.96,45.443,532.96,172.979    C532.948,288.509,460.058,386.129,373.766,386.129z M373.766,24.704c-84.205,0-134.478,55.424-134.478,148.275    c0,102.14,61.575,188.444,134.478,188.444c72.89,0,134.49-86.292,134.49-188.444C508.244,80.128,457.97,24.704,373.766,24.704z"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="send-butt" @click="validate">заказать звонок</div>
                </modal>
            </div>
            <div class="home-slider">
                <div class="slide" style="background-image: url('https://images.alphacoders.com/541/541924.jpg')">
                    <div class="slide-content">
                        <div class="container">
                            <div class="slide-title">Хотите увеличить продажи на 30%?</div>
                            <div class="slide-text">У нас есть готовое решение!</div>
                            <div class="slide-label">Автоматизация торговли</div>
                            <div class="slide-button" @click="callBack = true">Получить консультацию</div>
                        </div>
                    </div>
                </div>
                <div class="slide" style="background-image: url('http://www.planwallpaper.com/static/images/ComputerDesktopWallpapersCollection540_047_inxQEjv.jpg')">
                    <div class="slide-content">
                        <div class="container">
                            <div class="slide-title">Хотите увеличить продажи на 30%?</div>
                            <div class="slide-text">У нас есть готовое решение!</div>
                            <div class="slide-label">Автоматизация торговли</div>
                            <div class="slide-button" @click="callBack = true">Получить консультацию</div>
                        </div>
                    </div>
                </div>
                <div class="slide" style="background-image: url('http://www.planwallpaper.com/static/images/dd170f37d84b3b21635f2ece8d416afa_large.jpeg')">
                    <div class="slide-content">
                        <div class="container">
                            <div class="slide-title">Хотите увеличить продажи на 30%?</div>
                            <div class="slide-text">У нас есть готовое решение!</div>
                            <div class="slide-label">Автоматизация торговли</div>
                            <div class="slide-button" @click="callBack = true">Получить консультацию</div>
                        </div>
                    </div>

                </div>
                <div class="slide" style="background-image: url('http://www.planwallpaper.com/static/images/desktop-desktops-highway-night-photo-hdwallpapers2016com.jpg')">
                    <div class="slide-content">
                        <div class="container">
                            <div class="slide-title">Хотите увеличить продажи на 30%?</div>
                            <div class="slide-text">У нас есть готовое решение!</div>
                            <div class="slide-label">Автоматизация торговли</div>
                            <div class="slide-button" @click="callBack = true">Получить консультацию</div>
                        </div>
                    </div>
                </div>
                <div class="slide" style="background-image: url('http://www.planwallpaper.com/static/images/Full-HD-Wallpapers-5A9.jpg')">
                    <div class="slide-content">
                        <div class="container">
                            <div class="slide-title">Хотите увеличить продажи на 30%?</div>
                            <div class="slide-text">У нас есть готовое решение!</div>
                            <div class="slide-label">Автоматизация торговли</div>
                            <div class="slide-button" @click="callBack = true">Получить консультацию</div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="main-menu">
            <div class="container">
                <ul>
                    <li>О нас</li>
                    <li>НАШИ Проекты</li>
                    <li>Оборудование</li>
                    <li>Отзывы</li>
                    <li> Контакты</li>
                </ul>
            </div>
        </section>
        <section class="aboutUs">
            <div class="container">
                <div class="block-title">Автоматизируmйте свой бизнес </div>
                <div class="block-desc">
                    Наше программное обеспечение и специальное оборудование соединяНаше программное обеспечение и специальное оборудование соединя
                </div>
                <ul class="list">
                    <li>
                        <div class="icon"><img src="./img/au1.png" alt=""></div>
                        <div class="title">Контроль</div>
                        <div class="text">Наше программное обеспечение и специальное оборудование соединя</div>
                    </li>
                    <li>
                        <div class="icon"><img src="./img/au2.png" alt=""></div>
                        <div class="title">Контроль</div>
                        <div class="text">Наше программное обеспечение и специальное оборудование соединя</div>
                    </li>
                    <li>
                        <div class="icon"><img src="./img/au3.png" alt=""></div>
                        <div class="title">Контроль</div>
                        <div class="text">оборудование соединяаше программное обеспечение оборудование соединяоборудование соединяоборудование соединяоборудование соединяоборудование соединяи специальное оборудование соединя</div>
                    </li>
                    <li>
                        <div class="icon"><img src="./img/au4.png" alt=""></div>
                        <div class="title">Контроль</div>
                        <div class="text">оборудование соединяоборудование соединя программное обеспечение и специальное оборудование соединя</div>
                    </li>
                    <li>
                        <div class="icon"><img src="./img/au5.png" alt=""></div>
                        <div class="title">Контроль</div>
                        <div class="text">Наше программное обеспечение и специальное оборудование соединя</div>
                    </li>

                </ul>
            </div>
        </section>
        <section class="whyUs">
            <div class="block-title">Почему выбирают нас</div>
            <div class="container">
                <div class="row">
                    <div class="num-block">
                        <span class="number">25</span>
                        <span class="text">Лет опыта</span>
                    </div>
                    <div class="num-block">
                        <span class="number">25</span>
                        <span class="text">Лет опыта</span>
                    </div>
                    <div class="num-block">
                        <span class="number">25</span>
                        <span class="text">Лет опыта</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="ourProjects">
            <div class="block-title">Выполненные проекты</div>
            <div class="toggle-block">
                <div class="title" @click="changeSlid(1)" :class="{active : block4.slid === 1}">Торговля</div>
            <div class="toggle" @click="changeSlid(3)">
                <div class="spinn"  :class="{active : block4.slid === 2}"></div>
    </div>
    <div class="title" @click="changeSlid(2)" :class="{active : block4.slid === 2}">Рестораны</div>
    </div>
    <div class="slider" id="sales" v-if="block4.slid === 1">
        <div class="slide">
            <div class="logo" style="background-image:url(http://unic-tokyo.com/wp/wp-content/uploads/2016/12/p4.png)"></div>
            <div class="task block">
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="solution block" >
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="imgs">
                <div class="img" style="background-image:url(https://i.ytimg.com/vi/-lLFuSUiiUA/maxresdefault.jpg)"></div>
                <div class="img" style="background-image:url(https://i.ytimg.com/vi/-lLFuSUiiUA/maxresdefault.jpg)"></div>
            </div>
        </div>
        <div class="slide">
            <div class="logo" style="background-image:url(http://unic-tokyo.com/wp/wp-content/uploads/2016/12/p4.png)"></div>
            <div class="task block">
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="solution block" >
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="imgs">
                <div class="img" style="background-image:url(https://i.ytimg.com/vi/-lLFuSUiiUA/maxresdefault.jpg)"></div>
                <div class="img" style="background-image:url(https://i.ytimg.com/vi/-lLFuSUiiUA/maxresdefault.jpg)"></div>
            </div>
        </div>
        <div class="slide">
            <div class="logo" style="background-image:url(http://unic-tokyo.com/wp/wp-content/uploads/2016/12/p4.png)"></div>
            <div class="task block">
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="solution block" >
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="imgs">
                <div class="img" style="background-image:url(https://i.ytimg.com/vi/-lLFuSUiiUA/maxresdefault.jpg)"></div>
                <div class="img" style="background-image:url(https://i.ytimg.com/vi/-lLFuSUiiUA/maxresdefault.jpg)"></div>
            </div>
        </div>
        <div class="slide">
            <div class="logo" style="background-image:url(http://unic-tokyo.com/wp/wp-content/uploads/2016/12/p4.png)"></div>
            <div class="task block">
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="solution block" >
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="imgs">
                <div class="img" style="background-image:url(https://i.ytimg.com/vi/-lLFuSUiiUA/maxresdefault.jpg)"></div>
                <div class="img" style="background-image:url(https://i.ytimg.com/vi/-lLFuSUiiUA/maxresdefault.jpg)"></div>
            </div>
        </div>
        <div class="slide">
            <div class="logo" style="background-image:url(http://unic-tokyo.com/wp/wp-content/uploads/2016/12/p4.png)"></div>
            <div class="task block">
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="solution block" >
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="imgs">
                <div class="img" style="background-image:url(https://i.ytimg.com/vi/-lLFuSUiiUA/maxresdefault.jpg)"></div>
                <div class="img" style="background-image:url(https://i.ytimg.com/vi/-lLFuSUiiUA/maxresdefault.jpg)"></div>
            </div>
        </div>
        <div class="slide">
            <div class="logo" style="background-image:url(http://unic-tokyo.com/wp/wp-content/uploads/2016/12/p4.png)"></div>
            <div class="task block">
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="solution block" >
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="imgs">
                <div class="img" style="background-image:url(https://i.ytimg.com/vi/-lLFuSUiiUA/maxresdefault.jpg)"></div>
                <div class="img" style="background-image:url(https://i.ytimg.com/vi/-lLFuSUiiUA/maxresdefault.jpg)"></div>
            </div>
        </div>

    </div>
    <div class="slider" id="restaurants" v-if="block4.slid === 2">
        <div class="slide">
            <div class="logo" style="background-image:url(https://orig13.deviantart.net/e143/f/2011/241/8/7/bmw_logo_512_png_by_mahesh69a-d48alga.png)"></div>
            <div class="task block">
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="solution block" >
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="imgs">
                <div class="img" style="background-image:url(http://rtr.md/wp-content/uploads/2017/08/greenhills031207_20.jpg)"></div>
                <div class="img" style="background-image:url(http://rtr.md/wp-content/uploads/2017/08/greenhills031207_20.jpg)"></div>
            </div>
        </div>
        <div class="slide">
            <div class="logo" style="background-image:url(https://orig13.deviantart.net/e143/f/2011/241/8/7/bmw_logo_512_png_by_mahesh69a-d48alga.png)"></div>
            <div class="task block">
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="solution block" >
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="imgs">
                <div class="img" style="background-image:url(http://rtr.md/wp-content/uploads/2017/08/greenhills031207_20.jpg)"></div>
                <div class="img" style="background-image:url(http://rtr.md/wp-content/uploads/2017/08/greenhills031207_20.jpg)"></div>
            </div>
        </div>
        <div class="slide">
            <div class="logo" style="background-image:url(https://orig13.deviantart.net/e143/f/2011/241/8/7/bmw_logo_512_png_by_mahesh69a-d48alga.png)"></div>
            <div class="task block">
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="solution block" >
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="imgs">
                <div class="img" style="background-image:url(http://rtr.md/wp-content/uploads/2017/08/greenhills031207_20.jpg)"></div>
                <div class="img" style="background-image:url(http://rtr.md/wp-content/uploads/2017/08/greenhills031207_20.jpg)"></div>
            </div>
        </div>
        <div class="slide">
            <div class="logo" style="background-image:url(https://orig13.deviantart.net/e143/f/2011/241/8/7/bmw_logo_512_png_by_mahesh69a-d48alga.png)"></div>
            <div class="task block">
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="solution block" >
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="imgs">
                <div class="img" style="background-image:url(http://rtr.md/wp-content/uploads/2017/08/greenhills031207_20.jpg)"></div>
                <div class="img" style="background-image:url(http://rtr.md/wp-content/uploads/2017/08/greenhills031207_20.jpg)"></div>
            </div>
        </div>
        <div class="slide">
            <div class="logo" style="background-image:url(https://orig13.deviantart.net/e143/f/2011/241/8/7/bmw_logo_512_png_by_mahesh69a-d48alga.png)"></div>
            <div class="task block">
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="solution block" >
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="imgs">
                <div class="img" style="background-image:url(http://rtr.md/wp-content/uploads/2017/08/greenhills031207_20.jpg)"></div>
                <div class="img" style="background-image:url(http://rtr.md/wp-content/uploads/2017/08/greenhills031207_20.jpg)"></div>
            </div>
        </div>
        <div class="slide">
            <div class="logo" style="background-image:url(https://orig13.deviantart.net/e143/f/2011/241/8/7/bmw_logo_512_png_by_mahesh69a-d48alga.png)"></div>
            <div class="task block">
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="solution block" >
                <div class="title">Задача</div>
                <div class="text">Жёсткая конкуренция/ Привлечь новых покупателей</div>
            </div>
            <div class="imgs">
                <div class="img" style="background-image:url(http://rtr.md/wp-content/uploads/2017/08/greenhills031207_20.jpg)"></div>
                <div class="img" style="background-image:url(http://rtr.md/wp-content/uploads/2017/08/greenhills031207_20.jpg)"></div>
            </div>
        </div>
    </div>
    </section>
    <section class="calback calback1">
        <div class="container">
            <div class="column">
                <div class="title">Понравилось решение проекта?</div>
                <div class="text">Свяжитесь с нами, чтобы узнать как быстро и экономно решить Ваш</div>
                <div class="form">
                    <input type="text" v-model="call.name" placeholder="Ваше имя">
                    <input type="text" v-model="call.email"  placeholder="E-mail или номер телефона">
                    <button class="send">Отправить</button>
                </div>
            </div>
        </div>

    </section>
    <section class="ourItems">
        <div class="block-title">Наше оборудование</div>
        <div class="container">
            <div class="slider">
                <div class="slide">
                    <div class="img" style=" background-image: url(https://i.simpalsmedia.com/marketplace/products/original/bc89a34b9bd3c1433093b6c7c859a1bf.jpg)"></div>
                    <div class="title">МОНИТОР  «ALEX TOUCH 15’’M»</div>
                    <div class="text">Позволяет эффекtтивно и экономно использовать пространство на рабочем месте</div>

                </div>
                <div class="slide">
                    <div class="img" style=" background-image: url(https://i.simpalsmedia.com/marketplace/products/original/bc89a34b9bd3c1433093b6c7c859a1bf.jpg)"></div>
                    <div class="title">МОНИТОР  «ALEX TOUCH 15’’M»</div>
                    <div class="text">Позволяет эффекtтивно и экономно использовать пространство на рабочем месте</div>

                </div>
                <div class="slide">
                    <div class="img" style=" background-image: url(https://i.simpalsmedia.com/marketplace/products/original/bc89a34b9bd3c1433093b6c7c859a1bf.jpg)"></div>
                    <div class="title">МОНИТОР  «ALEX TOUCH 15’’M»</div>
                    <div class="text">Позволяет эффекtтивно и экономно использовать пространство на рабочем месте</div>

                </div>
                <div class="slide">
                    <div class="img" style=" background-image: url(https://i.simpalsmedia.com/marketplace/products/original/bc89a34b9bd3c1433093b6c7c859a1bf.jpg)"></div>
                    <div class="title">МОНИТОР  «ALEX TOUCH 15’’M»</div>
                    <div class="text">Позволяет эффекtтивно и экономно использовать пространство на рабочем месте</div>

                </div>
                <div class="slide">
                    <div class="img" style=" background-image: url(https://i.simpalsmedia.com/marketplace/products/original/bc89a34b9bd3c1433093b6c7c859a1bf.jpg)"></div>
                    <div class="title">МОНИТОР  «ALEX TOUCH 15’’M»</div>
                    <div class="text">Позволяет эффекtтивно и экономно использовать пространство на рабочем месте</div>

                </div>

            </div>
            <a class="all" href="">Посмотреть все оборудование →</a>
        </div>
    </section>
    <section class="parteners">
        <div class="block-title">Нам доверяют</div>
        <div class="container">
            <div class="slider">
                <div class="slide" style=" background-image: url(http://unic-tokyo.com/wp/wp-content/uploads/2016/12/p4.png)"></div>
                <div class="slide" style=" background-image: url(http://unic-tokyo.com/wp/wp-content/uploads/2016/12/p4.png)"></div>
                <div class="slide" style=" background-image: url(http://unic-tokyo.com/wp/wp-content/uploads/2016/12/p4.png)"></div>
                <div class="slide" style=" background-image: url(http://unic-tokyo.com/wp/wp-content/uploads/2016/12/p4.png)"></div>
                <div class="slide" style=" background-image: url(http://unic-tokyo.com/wp/wp-content/uploads/2016/12/p4.png)"></div>
                <div class="slide" style=" background-image: url(http://unic-tokyo.com/wp/wp-content/uploads/2016/12/p4.png)"></div>
                <div class="slide" style=" background-image: url(http://unic-tokyo.com/wp/wp-content/uploads/2016/12/p4.png)"></div>
            </div>
        </div>
        <div class="container"></div>
    </section>
    <section class="calback2 calback">
        <div class="container">
            <div class="column">
                <div class="title">Понравилось решение проекта?</div>
                <div class="text">Свяжитесь с нами, чтобы узнать как быстро и экономно решить Ваш</div>
                <div class="form">
                    <input
                            placeholder="Ваше имя"
                            type="text"
                            v-validate="'required|min:2|max:30'"
                            name="form1_name"
                            v-model.lazy="call.name"
                            data-vv-validate-on="none"
                            :class="{ error: errors.has('form1_name')}"
                            v-on:focus="removeError('form1_name');"
                    >
                    <input
                           type="text"
                           placeholder="E-mail или номер телефона"
                           v-validate="'required'"
                           name="form1_email"
                           v-model.lazy="call.email"
                           data-vv-validate-on="none"
                           :class="{ error: errors.has('form1_email')}"
                           v-on:focus="removeError('form1_email');"
                    >
                    <button class="send" @click="validate">Отправить</button>
                </div>
            </div>
        </div>
    </section>

    <section class="maps">
        <div class="links">
            <div class="container">
                <div class="row">
                    <div class="link" :class="{active : maps.tab===1}" @click= "changeMap(1)">ЦЕНТРАЛЬНЫЙ ОФИС</div>
                    <div class="link" :class="{active : maps.tab===2}" @click= "changeMap(2)">ЦЕНТРАЛЬНЫЙ ОФИС</div>
                    <div class="link" :class="{active : maps.tab===3}" @click="changeMap(3)">ЦЕНТРАЛЬНЫЙ ОФИС</div>
                    <div class="link" :class="{active : maps.tab===4}" @click="changeMap(4)">ЦЕНТРАЛЬНЫЙ ОФИС</div>
                </div>
            </div>
        </div>
        <div class="maps-block" id="map">
            <div class="info">
                <div class="block" v-if="maps.tab === 1 ">
                    <div class="block-t">Центральный офис</div>
                    <div class="text-block">
                        <div class="title">Адрес</div>
                        <div class="text">Республика Молдова, мун. Кишинев,
                            ул. Ион Прункул, 4/1
                        </div>
                        <div class="text-block">
                            <div class="title">Электронная почта</div>
                            <div class="text">
                                <a href="">office@alex-se.com</a>
                            </div>
                        </div>
                        <div class="text-block">
                            <div class="title">Телефоны</div>
                            <div class="text">
                                (+373) 22 24-45-72  — Офис<br>
                                (+373) 22 24-30-87  — Сервисный центр<br>
                                (+373) 22 29-67-29  — Факс<br>
                            </div>
                        </div>
                        <div class="text-block">
                            <div class="title">График работы</div>
                            <div class="text">
                                Пн. - Пт.  с 9:00 до 18:00<br>
                                Сб. - Вс.  Выходные дни
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block" v-if="maps.tab === 2 ">
                    <div class="block-t">Центральный офис</div>
                    <div class="text-block">
                        <div class="title">Адрес</div>
                        <div class="text">Республика Молдова, мун. Кишинев,
                            ул. Ион Прункул, 4/1
                        </div>
                        <div class="text-block">
                            <div class="title">Электронная почта</div>
                            <div class="text">
                                <a href="">office@alex-se.com</a>
                            </div>
                        </div>
                        <div class="text-block">
                            <div class="title">Телефоны</div>
                            <div class="text">
                                (+373) 22 24-45-72  — Офис<br>
                                (+373) 22 24-30-87  — Сервисный центр<br>
                                (+373) 22 29-67-29  — Факс<br>
                            </div>
                        </div>
                        <div class="text-block">
                            <div class="title">График работы</div>
                            <div class="text">
                                Пн. - Пт.  с 9:00 до 18:00<br>
                                Сб. - Вс.  Выходные дни
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block" v-if="maps.tab === 3 ">
                    <div class="block-t">Центральный офис</div>
                    <div class="text-block">
                        <div class="title">Адрес</div>
                        <div class="text">Республика Молдова, мун. Кишинев,
                            ул. Ион Прункул, 4/1
                        </div>
                        <div class="text-block">
                            <div class="title">Электронная почта</div>
                            <div class="text">
                                <a href="">office@alex-se.com</a>
                            </div>
                        </div>
                        <div class="text-block">
                            <div class="title">Телефоны</div>
                            <div class="text">
                                (+373) 22 24-45-72  — Офис<br>
                                (+373) 22 24-30-87  — Сервисный центр<br>
                                (+373) 22 29-67-29  — Факс<br>
                            </div>
                        </div>
                        <div class="text-block">
                            <div class="title">График работы</div>
                            <div class="text">
                                Пн. - Пт.  с 9:00 до 18:00<br>
                                Сб. - Вс.  Выходные дни
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block" v-if="maps.tab === 4 ">
                    <div class="block-t">Центральный офис</div>
                    <div class="text-block">
                        <div class="title">Адрес</div>
                        <div class="text">Республика Молдова, мун. Кишинев,
                            ул. Ион Прункул, 4/1
                        </div>
                        <div class="text-block">
                            <div class="title">Электронная почта</div>
                            <div class="text">
                                <a href="">office@alex-se.com</a>
                            </div>
                        </div>
                        <div class="text-block">
                            <div class="title">Телефоны</div>
                            <div class="text">
                                (+373) 22 24-45-72  — Офис<br>
                                (+373) 22 24-30-87  — Сервисный центр<br>
                                (+373) 22 29-67-29  — Факс<br>
                            </div>
                        </div>
                        <div class="text-block">
                            <div class="title">График работы</div>
                            <div class="text">
                                Пн. - Пт.  с 9:00 до 18:00<br>
                                Сб. - Вс.  Выходные дни
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="map" id="place1"  :class="{active :  maps.tab===1}"></div>
            <div class="map" id="place2"  :class="{active :  maps.tab===2}"></div>
            <div class="map" id="place3"  :class="{active :  maps.tab===3}"></div>
            <div class="map" id="place4"  :class="{active :  maps.tab===4}"></div>

        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-logo"></div>
                <div class="phones">
                    <div class="phone">+373 69 900 989</div>
                    <div class="phone">+373 22 244 572</div>
                </div>
                <div class="place">мун. Кишинев,  ул. Ион Прункул, 4/1</div>
                <div class="socials">
                    <div class="social" style="background-image:url(../img/fb.png)"></div>
                    <div class="social" style="background-image:url(../img/g.png)"></div>
                    <div class="social" style="background-image:url(../img/ok.png)"></div>
                    <div class="social" style="background-image:url(../img/inst.png)"></div>
                    <div class="social" style="background-image:url(../img/yt.png)"></div>
                </div>
                <div class="uniweb">
                    <span class="produced">Разработка сайта </span>
                    <div class="img"></div>
                </div>

            </div>


        </div>
    </section>
    </div>
    <script>
        window.markers ={
            loc1:{
                lat: -25.363,
                lng: 131.044
            },
            loc2:{
                lat: 25.363,
                lng: 131.044
            },
            loc3:{
                lat: 25.363,
                lng: -131.044
            },
            loc4:{
                lat: -25.363,
                lng: -131.044
            }
        };
//        function WhenGoogleLoaded(fnt) {
//            if(typeof google != 'undefined')
//                fnt();
//            else
//                setTimeout(function() {
//                    (function(fnt) {
//                        WhenGoogleLoaded(fnt)
//                    })(fnt)}, 500);
//        }
        function initMap() {

                var place =window.markers.loc1;
                var map =new google.maps.Map(document.getElementById('place1'),
                    {
                        zoom: 4,
                        center: place
                    });
                var marker = new google.maps.Marker({
                    icon: '../img/pin.png',
                    position: place,
                    map: map
                });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPRVreyZqe4znwNHXDTx_wPSjSntFOADg&callback=initMap"></script>
@stop
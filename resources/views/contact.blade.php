@extends('layouts.main')

@section('style')
@endsection

@section('content')
    <div class="wrapper">
        {{--=========SECTION MAIN-CONTACTS=========--}}
        <section class="section__main">
            <img src="/img/bg/bg-main.jpg" alt="">
            <div class="general__container">
                <div class="main">
                    <div class="main__content">
                        <h1 class="title general__corbel-b ">Контакты</h1>
                        <p class="subtitle general__corbel-r">Оставьте свои контакты, заполнив текущую форму, и мы свяжемся с вами в ближайшее время.</p>
                        <div class="main__btns">
                        </div>
                    </div>

                    <a href="#contacts" class="main__scroll">
                        <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.1 13L7.6125 18.6875L9.1875 20.5833L8.925 16.25L8.925 -5.27815e-07L12.075 -3.90124e-07L12.075 16.25L11.8125 20.5833L13.3875 18.6875L18.9 13L21 15.1667L10.5 26L-6.62956e-07 15.1667L2.1 13Z" fill="#FAB448"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        {{--=========SECTION CONTACTS=========--}}
        <section class="section__contacts">
            <div class="general__container">
                <div class="contacts" id="contacts">
                    <div class="contacts__column contacts__column-left">
                        <h2 class="title general__title">
                            <span class="line">Как мы можем</span>
                            <span class="pl"> помочь?</span>
                        </h2>
                        <p class="subtitle general__euclid-l">Оставьте свои контакты, заполнив текущую форму, и мы свяжемся с вами в ближайшее время.</p>
                        <address>
                            <div class="box">
                                <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 2.47668C13.0837 2.48014 10.2878 3.64018 8.22565 5.70233C6.1635 7.76448 5.00346 10.5604 5 13.4767C5 22.8888 15 29.9982 15.4258 30.296C15.5942 30.4136 15.7946 30.4767 16 30.4767C16.2054 30.4767 16.4058 30.4136 16.5742 30.296C17 29.9982 27 22.8888 27 13.4767C26.9965 10.5604 25.8365 7.76448 23.7744 5.70233C21.7122 3.64018 18.9163 2.48014 16 2.47668ZM16.0007 9.47705C16.7919 9.47705 17.5652 9.71164 18.223 10.1512C18.8808 10.5907 19.3935 11.2154 19.6963 11.9463C19.999 12.6772 20.0782 13.4815 19.9239 14.2574C19.7695 15.0333 19.3886 15.7461 18.8292 16.3055C18.2697 16.8649 17.557 17.2458 16.7811 17.4002C16.0052 17.5545 15.2009 17.4753 14.47 17.1726C13.7391 16.8698 13.1144 16.3571 12.6749 15.6993C12.2353 15.0415 12.0007 14.2682 12.0007 13.477C12.0007 12.9518 12.1042 12.4316 12.3052 11.9463C12.5062 11.461 12.8008 11.02 13.1723 10.6486C13.5437 10.2771 13.9847 9.98251 14.47 9.7815C14.9553 9.58048 15.4754 9.47703 16.0007 9.47705Z" fill="#FAB448"/>
                                </svg>
                                <div class="box__content">
                                    <h4 class="box__name general__euclid-m">Адрес</h4>
                                    <p class="box__text general__euclid-r">Узбекистан, Ташкент, Национальный парк Узбекистана имени Алишера Навои
                                    </p>
                                </div>
                            </div>
                            <div class="box">
                                <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.7465 20.2804L21.8917 17.7712C21.586 17.6396 21.2523 17.5867 20.9209 17.6171C20.5895 17.6476 20.271 17.7605 19.9944 17.9456L16.864 20.0322C14.9508 19.1017 13.4023 17.5601 12.4634 15.651L12.4636 15.6508L14.543 12.4735C14.724 12.1977 14.8338 11.8813 14.8626 11.5526C14.8914 11.224 14.8383 10.8933 14.708 10.5902L12.1965 4.73047C12.0256 4.33271 11.7304 4.00103 11.3551 3.78508C10.9799 3.56914 10.5448 3.48056 10.115 3.53259C8.42607 3.74974 6.87398 4.57433 5.74865 5.85231C4.62331 7.13028 4.00173 8.77423 4 10.4771C4 20.4023 12.0747 28.4771 22 28.4771C23.7028 28.4753 25.3468 27.8537 26.6248 26.7284C27.9028 25.603 28.7273 24.0509 28.9445 22.3619C28.9964 21.9321 28.9077 21.4971 28.6917 21.1219C28.4758 20.7467 28.1442 20.4514 27.7465 20.2804Z" fill="#FAB448"/>
                                    <path d="M19.6694 6.44309C21.1951 6.85331 22.5861 7.65724 23.7032 8.77433C24.8203 9.89143 25.6242 11.2825 26.0344 12.8081C26.1033 13.0638 26.2709 13.2817 26.5003 13.4141C26.7297 13.5464 27.0023 13.5823 27.2581 13.5139C27.514 13.4455 27.7323 13.2785 27.8651 13.0493C27.9979 12.8202 28.0344 12.5477 27.9666 12.2917C27.4651 10.4268 26.4823 8.72633 25.1168 7.36076C23.7512 5.99519 22.0508 5.01244 20.1858 4.51096C19.9298 4.44313 19.6573 4.47962 19.4282 4.61243C19.1991 4.74524 19.032 4.96353 18.9636 5.21939C18.8952 5.47525 18.9311 5.74779 19.0635 5.97721C19.1958 6.20662 19.4137 6.37417 19.6694 6.44309L19.6694 6.44309Z" fill="#FAB448"/>
                                    <path d="M18.6343 10.3077C19.4818 10.5356 20.2545 10.9822 20.8751 11.6028C21.4957 12.2234 21.9423 12.9961 22.1702 13.8436C22.2391 14.0993 22.4066 14.3173 22.6361 14.4496C22.8655 14.5819 23.138 14.6178 23.3939 14.5494C23.6497 14.4811 23.868 14.314 24.0008 14.0848C24.1336 13.8557 24.1701 13.5833 24.1023 13.3272C23.7832 12.1404 23.1578 11.0582 22.2887 10.1892C21.4197 9.32012 20.3375 8.69471 19.1506 8.37559C18.8946 8.30775 18.6222 8.34424 18.393 8.47705C18.1639 8.60987 17.9968 8.82815 17.9284 9.08402C17.8601 9.33988 17.896 9.61242 18.0283 9.84183C18.1606 10.0712 18.3786 10.2388 18.6343 10.3077L18.6343 10.3077Z" fill="#FAB448"/>
                                </svg>
                                <div class="box__content">
                                    <h4 class="box__name general__euclid-m">Телефон</h4>
                                    <p class="box__text general__euclid-r">+998 71 288 88 88</p>
                                </div>
                            </div>
                            <div class="box">
                                <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M29.4341 7.2847L25.1915 3.04202C25.0039 2.85449 24.7496 2.74914 24.4844 2.74915C24.2191 2.74915 23.9648 2.85451 23.7773 3.04206C23.5897 3.2296 23.4844 3.48395 23.4844 3.74917C23.4844 4.01439 23.5897 4.26874 23.7773 4.45627L28.0199 8.69888C28.1128 8.79174 28.223 8.86541 28.3443 8.91566C28.4656 8.96592 28.5957 8.99179 28.727 8.99179C28.8583 8.9918 28.9884 8.96593 29.1097 8.91568C29.231 8.86543 29.3413 8.79177 29.4341 8.69892C29.527 8.60606 29.6006 8.49582 29.6509 8.3745C29.7012 8.25317 29.727 8.12314 29.727 7.99181C29.727 7.86049 29.7012 7.73046 29.6509 7.60913C29.6007 7.4878 29.527 7.37756 29.4341 7.2847H29.4341Z" fill="#FAB448"/>
                                    <path d="M8.22122 3.04202C8.03369 2.8545 7.77934 2.74915 7.51413 2.74915C7.24892 2.74915 6.99457 2.8545 6.80704 3.04202L2.56436 7.2847C2.37683 7.47224 2.27148 7.7266 2.27148 7.99182C2.27149 8.25703 2.37685 8.51138 2.56439 8.69892C2.75194 8.88645 3.00629 8.9918 3.27151 8.99179C3.53673 8.99179 3.79108 8.88642 3.97861 8.69888L8.22122 4.45627C8.40875 4.26872 8.5141 4.01437 8.5141 3.74915C8.5141 3.48393 8.40875 3.22957 8.22122 3.04202Z" fill="#FAB448"/>
                                    <path d="M27.9946 16.13C27.9921 16.0403 27.9889 15.9507 27.9844 15.8614C27.9842 15.8583 27.984 15.8552 27.9838 15.8522C27.8293 12.8897 26.5829 10.0894 24.4853 7.99176C22.3876 5.89411 19.5874 4.64776 16.6249 4.49322C16.6218 4.49304 16.6188 4.4928 16.6157 4.49268C16.5263 4.48816 16.4368 4.48499 16.347 4.48243C16.3336 4.48206 16.3202 4.48133 16.3068 4.48096C16.2047 4.47839 16.1025 4.47709 16 4.47705C15.8975 4.47705 15.7953 4.47835 15.6932 4.48096C15.6797 4.48132 15.6664 4.48206 15.653 4.48242C15.5632 4.48499 15.4737 4.48816 15.3843 4.49267C15.3812 4.4928 15.3782 4.49304 15.3751 4.49322C12.4126 4.64778 9.61238 5.89414 7.51474 7.99179C5.41709 10.0894 4.17073 12.8897 4.01617 15.8522C4.01599 15.8552 4.01575 15.8583 4.01562 15.8614C4.01111 15.9507 4.00793 16.0403 4.00537 16.13C4.00501 16.1434 4.00428 16.1568 4.00391 16.1703C4.00134 16.2723 4.00004 16.3746 4 16.4771C4 16.5795 4.0013 16.6818 4.00391 16.7838C4.00427 16.7973 4.005 16.8107 4.00537 16.8241C4.00793 16.9138 4.01111 17.0034 4.01562 17.0927C4.01575 17.0958 4.01599 17.0989 4.01617 17.1019C4.1707 20.0644 5.41706 22.8647 7.51471 24.9623C9.61236 27.06 12.4126 28.3063 15.3751 28.4609C15.3782 28.4611 15.3812 28.4613 15.3843 28.4614C15.4737 28.4659 15.5632 28.4691 15.653 28.4717C15.6664 28.472 15.6798 28.4728 15.6932 28.4731C15.7953 28.4757 15.8975 28.477 16 28.477C16.1025 28.477 16.2047 28.4757 16.3068 28.4731C16.3203 28.4728 16.3336 28.472 16.347 28.4717C16.4368 28.4691 16.5263 28.4659 16.6157 28.4614C16.6188 28.4613 16.6218 28.4611 16.6249 28.4609C19.5874 28.3063 22.3876 27.06 24.4853 24.9623C26.5829 22.8647 27.8293 20.0644 27.9838 17.1019C27.984 17.0989 27.9843 17.0958 27.9844 17.0927C27.9889 17.0034 27.9921 16.9138 27.9946 16.8241C27.995 16.8107 27.9957 16.7973 27.9961 16.7838C27.9987 16.6818 28 16.5795 28 16.4771C28 16.3746 27.9987 16.2723 27.9961 16.1703C27.9957 16.1568 27.995 16.1434 27.9946 16.13ZM23 17.4771H16C15.7348 17.477 15.4804 17.3717 15.2929 17.1842C15.1054 16.9966 15 16.7423 15 16.4771V9.47705C15 9.21183 15.1054 8.95748 15.2929 8.76994C15.4804 8.58241 15.7348 8.47705 16 8.47705C16.2652 8.47705 16.5196 8.58241 16.7071 8.76994C16.8946 8.95748 17 9.21183 17 9.47705V15.4771H23C23.2652 15.4771 23.5196 15.5824 23.7071 15.7699C23.8946 15.9575 24 16.2118 24 16.4771C24 16.7423 23.8946 16.9966 23.7071 17.1842C23.5196 17.3717 23.2652 17.4771 23 17.4771Z" fill="#FAB448"/>
                                </svg>
                                <div class="box__content">
                                    <h4 class="box__name general__euclid-m">Время работы</h4>
                                    <p class="box__text general__euclid-r">09:00 - 18:00 ПН-СБ</p>
                                </div>
                            </div>
                        </address>
                    </div>
                    <div class="contacts__column contacts__column-right">
                        <form action="" class="contacts__form">
                            <label for="name" class="form__box">
                                <span class="form__name general__euclid-r">Имя</span>
                                <input class="form__place general__euclid-r" id="name" type="text" placeholder="Как вас зовут?">
                            </label>
                            <label for="tel" class="form__box">
                                <span class="form__name general__euclid-r">Номер телефона</span>
                                <div class="form__box-block">
                                    <img src="/img/icons/uzb-flag.png" alt="">
                                    <input class="form__place general__euclid-r" id="tel" type="tel" placeholder="+998">
                                </div>
                            </label>
                            <label for="categories" class="form__box">
                                <span class="form__name general__euclid-r">Отдел</span>
                                <div class="form__box-block">
                                    <select class="form__place general__euclid-r" name="categories" id="categories">
                                        <option value="">Выберите отдел</option>
                                    </select>
                                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1.5L8 8.5L15 1.5" stroke="#FAB448" stroke-width="2"/>
                                    </svg>
                                </div>
                            </label>
                            <label for="message" class="form__box">
                                <span class="form__name general__euclid-r">Ваш вопрос</span>
                                <textarea class="form__place general__euclid-r" name="message" id="massage" placeholder="Оставьте свой вопрос ..."></textarea>
                            </label>
                            <div class="form__box">
                                <button class="general__euclid-b form__btn" type="submit">Обратная связь</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="map" id="map"></div>
            <div class="general__container">
                <div class="contacts__bottom">
                    <p class="txt general__euclid-l">© 2022 Discover Invest. Все права защищены.</p>
                    <div class="messengers">
                        <a href="" class="messengers__link">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.2036 16.3438L19.7145 13.0158H16.521V10.8561C16.521 9.9458 16.9669 9.05791 18.3973 9.05791H19.849V6.2247C19.849 6.2247 18.5318 6 17.2721 6C14.6423 6 12.9234 7.59418 12.9234 10.4797V13.0164H10V16.3444H12.9234V24.39H16.521V16.3444L19.2036 16.3438Z" fill="#262524"/>
                            </svg>
                        </a>
                        <a href="" class="messengers__link">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.3332 11.4376C24.3219 10.6645 24.1789 9.89745 23.9052 9.17434C23.4262 7.93954 22.4508 6.96313 21.216 6.48514C20.5021 6.21653 19.7473 6.07252 18.9833 6.05617C18.0008 6.01226 17.6893 6 15.1952 6C12.701 6 12.3814 6 11.406 6.05617C10.643 6.07252 9.88826 6.21653 9.17434 6.48514C7.93953 6.96313 6.96313 7.93954 6.48514 9.17434C6.21653 9.88826 6.07149 10.643 6.0572 11.406C6.01328 12.3895 6 12.701 6 15.1952C6 17.6893 6 18.008 6.0572 18.9844C6.07252 19.7483 6.21653 20.5021 6.48514 21.218C6.96415 22.4518 7.93953 23.4282 9.17536 23.9062C9.88622 24.184 10.641 24.3413 11.407 24.3658C12.3906 24.4097 12.7021 24.423 15.1962 24.423C17.6903 24.423 18.01 24.423 18.9854 24.3658C19.7483 24.3505 20.5031 24.2065 21.218 23.9379C22.4529 23.4589 23.4282 22.4825 23.9072 21.2487C24.1759 20.5337 24.3199 19.78 24.3352 19.015C24.3791 18.0325 24.3924 17.721 24.3924 15.2258C24.3903 12.7317 24.3903 12.4151 24.3332 11.4376ZM15.189 19.9117C12.5805 19.9117 10.4674 17.7986 10.4674 15.1901C10.4674 12.5815 12.5805 10.4684 15.189 10.4684C17.7955 10.4684 19.9107 12.5815 19.9107 15.1901C19.9107 17.7986 17.7955 19.9117 15.189 19.9117ZM20.0987 11.3947C19.4889 11.3947 18.9976 10.9025 18.9976 10.2937C18.9976 9.68501 19.4889 9.19273 20.0987 9.19273C20.7064 9.19273 21.1986 9.68501 21.1986 10.2937C21.1986 10.9025 20.7064 11.3947 20.0987 11.3947Z" fill="#262524"/>
                                <path d="M15.1882 18.2572C16.8821 18.2572 18.2553 16.8841 18.2553 15.1901C18.2553 13.4962 16.8821 12.123 15.1882 12.123C13.4943 12.123 12.1211 13.4962 12.1211 15.1901C12.1211 16.8841 13.4943 18.2572 15.1882 18.2572Z" fill="#262524"/>
                            </svg>
                        </a>
                        <a href="" class="messengers__link">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.2764 23.3439L12.6182 18.1807L21.9926 9.73395C22.4076 9.35555 21.9071 9.17246 21.3578 9.50203L9.78633 16.8136L4.78177 15.2268C3.70763 14.9216 3.69542 14.177 5.0259 13.6399L24.5193 6.1209C25.4103 5.7181 26.2647 6.34061 25.923 7.70771L22.6029 23.3439C22.371 24.4547 21.6996 24.7232 20.7719 24.2105L15.7186 20.4754L13.2895 22.8312C13.0088 23.112 12.7769 23.3439 12.2764 23.3439Z" fill="#262524"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        $(window).on('scroll load', () => {
            ($(window).scrollTop() > 80) ?
                $('.header').addClass('header__dark') :
                $('.header').removeClass('header__dark')
        });

        $(window).on('load', function () {
            $('.section__main').addClass('page')
        });
    </script>
@endsection


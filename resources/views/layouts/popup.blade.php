{{--=========POPUP BTN=========--}}
@if (\Request::segment(1) != 'contacts')
    

<a href="#" class="popup__btn">
    <svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="1" y="1" width="59" height="59" stroke="#FAB448" stroke-width="2"/>
        <path d="M22.4737 24.3576C21.2932 27.0437 22.3425 31.4757 25.3592 35.1019C29.0317 39.5339 34.2782 41.2799 36.9014 38.9967L39 37.2508L36.1145 33.6246L33.8847 35.3705C32.3108 36.7135 29.4252 35.7734 27.4578 33.2216C25.4904 30.6699 24.9658 27.7152 26.5397 26.3722L28.6383 24.6262L25.6216 21" fill="white"/>
        <path d="M22.4737 24.3576C21.2932 27.0437 22.3425 31.4757 25.3592 35.1019C29.0317 39.5339 34.2782 41.2799 36.9014 38.9967L39 37.2508L36.1145 33.6246L33.8847 35.3705C32.3108 36.7135 29.4252 35.7734 27.4578 33.2216C25.4904 30.6699 24.9658 27.7152 26.5397 26.3722L28.6383 24.6262L25.6216 21L22.4737 24.3576Z" stroke="white" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="square"/>
    </svg>
</a>

{{--=========POPUP BACK=========--}}
<div class="popup__back"></div>

{{--=========POPUP MAIN=========--}}
<div class="popup">
    <span class="close popup__close">
        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 1L20 20" stroke="white" stroke-width="2"/>
<path d="M20 1L1 20" stroke="white" stroke-width="2"/>
</svg>
    </span>
    {{--=========POPUP FEEDBACK=========--}}
    <div class="popup__container" style="display: ">
        <h2 class="title general__corbel-b">{{__('asd.мы вам позвоним')}}</h2>
        <p class="subtitle general__corbel-r">{{__('asd.Оставьте свой номер, и мы перезвоним вам.')}}</p>
        <form action="#"  class="popup__form" >
            <label for="popup__name" class="form__box">
                <span class="general__euclid-l">{{__('asd.Ваше имя')}}</span>
                <input type="text" id="name" class="general__euclid-m">
            </label>
            <label for="popup__tel" class="form__box">
                <span class="general__euclid-l">{{__('asd.Номер телефона')}}</span>
                <input type="tel" id="phone" class="general__euclid-m">
                <input id="token" value="{{ csrf_token() }}" type="hidden">
            </label>      
            <label for="contacts" class="form__box">
                <span class="general__euclid-l">{{__('asd.Отдел')}}</span>
                <select id="contact" class="general__euclid-m" required>
                    <option>{{__('asd.Отдел')}}</option>
                        @foreach (App\Models\Department::all() as $departmet)
                            <option value="{{ $departmet->id }}">{{ $departmet['name_'.$lang]}}</option>
                        @endforeach
                </select>
            </label>
            <button type="button" id="button" onclick="send()" class="form__btn general__euclid-sm">{{__('asd.Отправить заявку')}}</button>
        </form>
        <p class="text">{{__('asd.Обращаем ваше внимание, что режим работы отдела продаж')}}
            с 9:00 до 21:00</p>
    </div>

    {{--=========POPUP SUCCESS=========--}}
    <div class="popup__success" style="display: none">
        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_1_352)">
                <path d="M32.367 37.6336C31.7393 37.006 30.888 36.6533 30.0003 36.6533C29.1126 36.6533 28.2613 37.006 27.6336 37.6336C27.0059 38.2613 26.6533 39.1126 26.6533 40.0003C26.6533 40.888 27.0059 41.7393 27.6336 42.367L37.6336 52.367C37.9451 52.6759 38.3145 52.9203 38.7206 53.0862C39.1267 53.2521 39.5616 53.3362 40.0003 53.3336C40.4566 53.3192 40.9051 53.2111 41.318 53.0161C41.7308 52.8212 42.0992 52.5435 42.4003 52.2003L65.7336 25.5336C66.2724 24.8647 66.5322 24.0137 66.4588 23.1579C66.3854 22.3022 65.9845 21.5077 65.3397 20.9403C64.6949 20.3729 63.856 20.0763 62.9979 20.1123C62.1397 20.1483 61.3286 20.5142 60.7336 21.1336L40.0003 45.1336L32.367 37.6336Z" fill="#FAB448"/>
                <path d="M69.9995 36.666C69.1155 36.666 68.2676 37.0172 67.6425 37.6423C67.0174 38.2675 66.6662 39.1153 66.6662 39.9994C66.6662 47.0718 63.8567 53.8546 58.8557 58.8555C53.8548 63.8565 47.072 66.666 39.9995 66.666C34.7332 66.6636 29.5854 65.1019 25.2054 62.1778C20.8254 59.2537 17.4093 55.0982 15.3878 50.2353C13.3663 45.3723 12.83 40.0197 13.8465 34.8523C14.863 29.685 17.3867 24.9343 21.0995 21.1994C23.5686 18.6973 26.5118 16.7128 29.7571 15.3621C33.0023 14.0113 36.4844 13.3214 39.9995 13.3327C42.131 13.346 44.2547 13.5919 46.3329 14.066C46.7678 14.2005 47.2256 14.2445 47.6781 14.1953C48.1307 14.1461 48.5684 14.0048 48.9642 13.7799C49.36 13.5551 49.7056 13.2516 49.9796 12.8881C50.2536 12.5246 50.4503 12.1088 50.5575 11.6664C50.6647 11.224 50.6801 10.7643 50.6028 10.3157C50.5256 9.86707 50.3572 9.43905 50.1082 9.05799C49.8591 8.67693 49.5347 8.35092 49.1548 8.10005C48.775 7.84919 48.3478 7.67878 47.8995 7.59935C45.31 6.99016 42.6597 6.67704 39.9995 6.66602C33.414 6.70023 26.9862 8.68442 21.5272 12.3682C16.0682 16.052 11.8228 21.2702 9.3266 27.3645C6.83043 33.4587 6.1954 40.1558 7.50166 46.6105C8.80791 53.0653 11.9969 58.9885 16.6662 63.6327C22.8552 69.8245 31.245 73.3123 39.9995 73.3327C48.8401 73.3327 57.3186 69.8208 63.5698 63.5696C69.821 57.3184 73.3329 48.8399 73.3329 39.9994C73.3329 39.1153 72.9817 38.2675 72.3566 37.6423C71.7314 37.0172 70.8836 36.666 69.9995 36.666Z" fill="#FAB448"/>
            </g>
            <defs>
                <clipPath id="clip0_1_352">
                    <rect width="80" height="80" fill="white"/>
                </clipPath>
            </defs>
        </svg>
        <h3 class="title general__corbel-b">{{__('asd.Ваша заявка успешно отправлена')}}</h3>
        <p class="subtitle">{{__('asd.Наши менеджеры обязательно свяжутся с Вами
            и ответят на все Ваши вопросы.')}}</p>
        <button class="popup__close general__corbel-b" type="button">{{__('asd.Закрыть')}}</button>
    </div>
</div>
@endif
<script>
    function send() {
        let token = $("#token").val();
        let name = $('#name').val();
        let phone = $('#phone').val();
        let contact = $('#contact').val();
        
        $.ajax({
            token: token,
            type: "get",
            url: "/admin/contact/store",
            data: {
                name: name,
                phone: phone,
                contact: contact,
            },
            contentType: "application/json; charset=utf-8",
            dataType: "json",
        });
        setTimeout(() => {
            $('.popup__container').hide()
            $('.popup__success').show()
            $("#name").val('');
            $("#phone").val('');
            $("#contact").val('');
        }, 1000)
        // setTimeout(() => {
        //     $('.popup__container').hide()
        //     $('.popup__success').hide()
        //     $('.feedback').hide()
        // }, 3000)
    }
</script>
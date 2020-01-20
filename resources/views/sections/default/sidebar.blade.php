<div class="sidebar_tours ml-auto">
    <div class="sidebar-header"><span>@lang('translate.construct')</span></div>
    <div class="sidebar-body">
        <form id="form22"  method="post"> {{ csrf_field() }}
            <input style="display: none" class="sidebar-body__input" type="text" name="title" id="title"
                   placeholder="Введите название тура">
            <input class="sidebar-body__input" type="number" name="price" id="price" placeholder="@lang('translate.price_tour')">
            <div class="dropdown">
                <div class="select">
                    <span>@lang('translate.cities')</span>
                    <img src="/images/drop-down-arrow.svg">
                </div>
                <input type="hidden" name="city" id="city">
                <ul class="dropdown-menu">
                    @foreach($cities as $city)
                        <li id="{{$city->name}}">{{$city->name}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="dropdown">
                <div class="select">
                    <span>@lang('translate.type_tour')</span>
                    <img src="/images/drop-down-arrow.svg">
                </div>
                <input type="hidden" name="type" id="type">
                <ul class="dropdown-menu">
                    <li id="Incoming">@lang('translate.incoming')</li>
                    <li id="Outgoing">@lang('translate.outgoing')</li>
                </ul>
            </div>
            <div class="sidebar-body__date">
                <input class="datepicker"  type="text" name="day1" placeholder="@lang('translate.day_come')" data-inputmask="'alias': 'date'">
                <input class="datepicker"  type="text" name="day2" placeholder="@lang('translate.departure')" data-inputmask="'alias': 'date'">
            </div>
            <button class="setting-overlay__btn"><span>@lang('translate.find')</span></button>
            <div class="sidebar-body__selects"><p>Количество комнат</p>
                <div class="sidebar-body__selects__item"><span>Односпальная</span> <select>
                        <option>1</option>
                        <option>1</option>
                        <option>1</option>
                        <option>1</option>
                        <option>1</option>
                    </select></div>
                <div class="sidebar-body__selects__item"><span>Двуспальная</span> <select>
                        <option>1</option>
                        <option>1</option>
                        <option>1</option>
                        <option>1</option>
                        <option>1</option>
                    </select></div>
                <div class="sidebar-body__selects__item"><span>Трехспальная</span> <select>
                        <option>1</option>
                        <option>1</option>
                        <option>1</option>
                        <option>1</option>
                        <option>1</option>
                    </select></div>
            </div>
        </form>
        <div class="sidebar-body__underline"></div>
    </div>
</div>

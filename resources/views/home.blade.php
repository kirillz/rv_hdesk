@include('layouts.main')

{{-- // TODO: дашбоард разбить на partials в layouts --}}

{{-- // FIXME: cайдбар слева убирается по бургеру сверху --}}
{{-- Left-Сайдбар должен иметь z-index меньший чем верхняя навигация и быть под ней --}}
{{-- При убирании влево контент вцентре адаптивно расширяется --}}
{{-- Навигация сверху перелетает в левый сайдбар, подбираются иконки fa --}}


{{-- сверху три панели--}}
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body revenue-panel">
                    <div style="overflow: hidden;">
                        <div class="in-thin">
                            Совокупный доход
                        </div>
                        <div class="in-bold">
                            <div class="currency-left">0.00 RUB</div>
                            <div class="currency-right">0.00 RUB</div>
                        </div>
                        <div class="range-label-div in-thin pull-right">
                            Последние 30 дней
                        </div>
                    </div>
                </div>
            </div>
        </div>{{-- /.col-md-4 --}}
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body revenue-panel">
                    <div style="overflow: hidden;">
                        <div class="in-thin">
                            Средний счет
                        </div>
                        <div class="in-bold">
                            <div class="currency-left">0.00 RUB</div>
                            <div class="currency-right">0.00 RUB</div>
                        </div>
                        <div class="range-label-div in-thin pull-right">
                            Последние 30 дней
                        </div>
                    </div>
                </div>
            </div>
        </div>{{-- /.col-md-4 --}}
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body revenue-panel">
                    <div style="overflow: hidden;">
                        <div class="in-thin">
                            Исходящие ср-ва
                        </div>
                        <div class="in-bold">
                            <div class="currency-left">0.00 RUB</div>
                            <div class="currency-right">0.00 RUB</div>
                        </div>
                        <div class="range-label-div in-thin pull-right">
                            Последние 30 дней
                        </div>
                    </div>
                </div>
            </div>
        </div>{{-- /.col-md-4 --}}

    </div>{{-- /.row --}}
</div>{{-- /.container --}}

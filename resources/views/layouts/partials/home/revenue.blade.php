{{-- сверху три панели--}}
<div class="col-md-4">
  <div class="panel panel-default">
    <div class="panel-body revenue-panel">
      <div style="overflow: hidden;">
        <div class="in-thin">
          Совокупный доход
        </div>
        <div class="in-bold">
          <div class="currency-left">{{ $invoiceSum }} RUB</div>
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
          <div class="currency-left">{{ $invoiceAvg }} RUB</div>
          <div class="currency-right">0.00 RUB</div>
        </div>
        <div class="range-label-div in-thin pull-right">
          Последние 30 дней
        </div>
      </div>
    </div>
  </div>
</div>{{-- /.col-md-4 --}}
<div class="col-md-3">
  <div class="panel panel-default">
    <div class="panel-body revenue-panel">
      <div style="overflow: hidden;">
        <div>
          <div class="in-thin">
            Клиенты
          </div>

          <div class="range-label-div in-thin">
            <div class="in-bold-left in-thin"><i class="fa fa-users"
                                                 style="width:38px; margin-top: 5px; padding-right:8px;"></i>Клиентов: {{ $clientsCount }}
            </div>
            <hr class="hr-primary mt-0 mb-2">
            <div class="in-thin">
              Счета
            </div>

            <div class="in-bold-left in-thin"><i class="fa fa-file-invoice-dollar"
                                                 style="width:38px; margin-top: 5px; padding-right:8px;"></i>Всего: {{ $invoicesCount }}
            </div>
            <div class="in-bold-left in-thin"><i class="fa fa-clipboard-check"
                                                 style="width:38px; margin-top: 5px; padding-right:8px;"></i>Оплачено:
              0
            </div>
            <div class="in-bold-left in-thin"><i class="fa fa-close"
                                                 style="width:38px; margin-top: 5px; padding-right:8px;"></i>
              Неоплачено: 0
            </div>
            <hr class="hr-primary mt-0 mb-2">
            <div class="in-thin">
              Задачи
            </div>

            <div class="in-bold-left in-thin"><i class="fa fa-list"
                                                 style="width:38px; margin-top: 5px; padding-right:8px;"></i>Всего: 0
            </div>
            <div class="in-bold-left in-thin"><i class="fa-solid fa-list-check"
                                                 style="width:38px; margin-top: 5px; padding-right:8px;"></i>Выполнено:
              0
            </div>
            <div class="in-bold-left in-thin"><i class="fa-solid fa-close"
                                                 style="width:38px; margin-top: 5px; padding-right:8px;"></i>Не выполнено:
              0
            </div>
            <hr class="hr-primary mt-0 mb-2">
          </div>

        </div>
      </div>
    </div>
  </div>
</div>{{-- /.col-md-4 --}}

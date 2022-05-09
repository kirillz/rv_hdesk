{{-- сверху три панели--}}
<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-body revenue-panel">
            <div style="overflow: hidden;">
                <div class="in-thin">
                    Совокупный доход
                </div>
                <div class="in-bold">
                    <div class="currency-left">{{ $invoice->balance->total() }} RUB</div>
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
<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-body revenue-panel">
            <div style="overflow: hidden;">
                <div class="in-thin">
                    Суммарно:
                </div>
                <div>
                  <div class="range-label-div in-thin">
                    <div class="currency-right in-bold">Клиентов: {{ $clientsCount }} Счетов: {{ $invoicesCount }}</div>
                    <div class="currency-right in-thin">Задач: 0</div>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>{{-- /.col-md-4 --}}

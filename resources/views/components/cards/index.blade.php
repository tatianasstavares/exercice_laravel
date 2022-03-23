    @component('components.title.h1', ['title' => 'Audi Car', 'style' => 'color:red;'])
    @endcomponent
    <div class="row">
        <div class="col-4">
            @component('components.card.index', [
                'title' => 'card1',
                'desc' => 'desc1',
                'img' => 'https://www.leaseplan.com/-/media/leaseplan-digital/pt/business-lease-and-private-lease/spotlight-pages/12_audi-a3/audi-a3_sportback-2021-1280-02.jpg?iar=0&rev=-1&mw=960'
            ])
            @endcomponent
        </div>
        <div class="col-4">
            @component('components.card.index', [
                'title' => 'dsad',
                'desc' => 'desc1',
                'img' => 'https://www.leaseplan.com/-/media/leaseplan-digital/pt/business-lease-and-private-lease/spotlight-pages/12_audi-a3/audi-a3_sportback-2021-1280-02.jpg?iar=0&rev=-1&mw=960'
            ])
            @endcomponent
        </div>
    </div>
    

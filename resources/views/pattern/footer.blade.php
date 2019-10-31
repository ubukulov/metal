<div id="footer">
    <div class="footer">
        <div class="footer_content">
            <div class="row">
                <div class="col-md-6">
                    <img width="150" src="{{ asset('img/logo1.png') }}" alt="" align="left" style="margin-right: 10px;">
                    <p>ТОО "KazMetallStal-Almaty" занимается производством и реализацией продукции различных металлов и сплавов. Ассортимент продукции обладает огромным количеством наименованией изделий. Вся продукция прошла контроль качеств и обладает всеми необходимыми сертификатами.</p>
                    <p><i class="fas fa-envelope"></i>&nbsp;Email: <a href="mailto:info@metaloprokat.kz">info@metaloprokat.kz</a></p>
                    <p><i class="fas fa-map-marker-alt"></i>&nbsp;Адрес: г. Алматы, Медеуский район, ул. Нусупбекова 11/9, оф. 19</p>
                </div>

                <div class="col-md-3">
                    <h2>ИНФОРМАЦИЯ</h2>
                    @foreach($pages as $page)
                        <a class="nav-link" href="{{ $page->url() }}">{{ $page->title }}</a>
                    @endforeach
                </div>

                <div class="col-md-3">
                    <h2>ТЕЛЕФОНЫ</h2>
                    <div>
                        <i class="fas fa-mobile-alt"></i>&nbsp;Отдел продаж <br>
                        <a href="tel:+7 (771) 171-44-27">+7 (771) 171-44-27</a><br>
                        <a href="tel:+7 (771) 171-44-25">+7 (771) 171-44-25</a><br>
                        <a href="tel:+7 (771) 171-44-26" style="margin-right: 20px;">+7 (771) 171-44-26</a>
                    </div>
                    <div>
                        <i class="fas fa-mobile-alt"></i>&nbsp;Отдел по заключению контрактов <br>
                        <a href="tel:+7 (771) 171-44-28" style="margin-right: 20px;">+7 (771) 171-44-28</a>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <div class="row">
                    <div class="col-md-6">
                        &copy;&nbsp;TOO "KazMetallStal-Almaty"
                    </div>

                    <div class="col-md-6 text-right">
                        <a href="https://www.instagram.com/metalloprokat.kz?r=nametag" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://youtu.be/hyOhlwL-pVc" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.facebook.com/metalloprokat.kz/" target="_blank"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach($tours as $tour)
    <a  href="/tour/{{ $tour->slug }}"
       class="tours-overlay__item" data-aos="zoom-in-up"
       @foreach(json_decode($tour->images) as $image)
       @if($loop->first) style="background-image: url('{{ $image->url }}')"
            @endif
            @endforeach >
        <div class="tours-overlay__price"><span>{{ $tour->price }} $</span></div>
        <div class="tours-overlay__list"><p>{{ $tour->title }}</p>
            <ul> @foreach(json_decode($tour->details) as $key) @if($loop->iteration < 5)
                    <li>{{ $key->key }}</li> @endif @endforeach</ul>
        </div>
        <div class="tours-overlay__title"><span>{{ $tour->title }}</span></div>
    </a> @endforeach

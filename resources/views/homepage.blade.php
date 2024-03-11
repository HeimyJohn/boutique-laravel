@extends('base')

@section('title', 'Accueil')

@section('content')
<div class="flex flex-col items-center w-full pt-16">
    <div class="h-168 overflow-hidden relative w-full flex items-center">
        <img class="w-full h-full object-cover" src="{{ asset("image/domenico-loia-hGV2TfOh0ns-unsplash.jpg") }}" alt="hero">
        <div class="absolute top-0 w-full h-full flex flex-col items-center">
            <span class="w-full h-full absolute bg-gradient-to-b from-black-figma"></span>
            <h2 class="w-full flex justify-center text-center text-white-figma uppercase text-4xl mt-10 md:pl-16 md:pr-16 pl-5 pr-5 z-10">{{ $flagship_product->name }}</h2>
            <a class="text-white-figma underline z-10 mt-5" href="/product/{{ $flagship_product->id }}">More info</a>
        </div>
    </div>
    <div class="w-full flex flex-col pl-5 pr-5 pt-16 pb-32 items-end md:pl-16 md:pr-16">
        <div class="w-full flex flex-col items-center">
            <h2 class="text-white-figma text-2xl mb-20">AVIS CLIENT</h2>
            @for ($i = 0; $i < 3; $i++)
                <div class="md:flex">
                    <img class="w-full h-full object-cover md:w-1/3" src="{{ asset("image/pngimg.com - keyboard_PNG5861.png") }}" alt="category">
                    <div class="md:w-2/3 md:ml-10">
                        <div class="mt-10 md:mt-0 md:flex md:justify-between md:mb-7">
                            <p class="text-white-figma">DUPONT Jean</p>
                            <div class="text-yellow-figma flex mt-1 mb-7 md:mt-0 md:mb-0">
                                @for ($j = 0; $j < 4; $j++)
                                    <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M480-262 298-152q-11 7-22 6.5t-19-7.5q-8-6-12.5-15.5T243-191l48-208-161-141q-9-7-11.5-17.5t.5-20.5q3-10 11.5-17t20.5-8l213-18 82-197q5-11 14.5-16.5T480-840q10 0 19.5 5.5T514-818l83 197 212 18q12 1 20.5 8t11.5 17q3 10 .5 20.5T830-540L669-399l48 208q3 13-1.5 22.5T703-153q-8 7-19 7.5t-21-6.5L480-262Z"/></svg>
                                @endfor
                                <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M480-710v363l148 89-40-166 130-113-171-15-67-158Zm0 448L298-152q-11 7-22 6.5t-19-7.5q-8-6-12.5-15.5T243-191l48-208-161-141q-9-7-11.5-17.5t.5-20.5q3-10 11.5-17t20.5-8l213-18 82-197q5-11 14.5-16.5T480-840q10 0 19.5 5.5T514-818l83 197 212 18q12 1 20.5 8t11.5 17q3 10 .5 20.5T830-540L669-399l48 208q3 13-1.5 22.5T703-153q-8 7-19 7.5t-21-6.5L480-262Z"/></svg>
                            </div>
                        </div>
                    <p class="text-white-figma">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempor sapien vel nisl malesuada, sed dapibus metus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque at sollicitudin metus. Pellentesque placerat non nunc id molestie. Nulla facilisi. Donec tincidunt pulvinar justo. Pellentesque pulvinar lacinia.</p>
                    </div>
                </div>
                <div class="w-full h-px mt-10 mb-10 bg-gray-figma last-of-type:hidden"></div>
            @endfor
        </div>
    </div>
    <div class="bg-blue-variant-figma w-full">
        <div class="w-full flex justify-between pl-16 pr-16 pt-16 pb-16">
            <div class="text-white-figma flex flex-col items-center md:w-1/4">
                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="m439-441-76-76q-11.091-11-27.045-10.5Q320-527 310-517.211q-11 11.19-11 27.034T310-464l101 101q9.818 11 24.727 11T462-363l188-188q10-9.8 10-24.9 0-15.1-9.289-26.1-11.29-10-26.567-9.5Q608.867-611 599-601L439-441Zm41 373q-6.32 0-11.88-.75Q462.56-69.5 458-72q-145-47-229-174.742-84-127.741-84-276.364V-721q0-23.472 13.115-42.25Q171.231-782.027 193-791l262-98q12-4 25-4t26 4l262 98q20.788 8.513 33.894 27.432Q815-744.649 815-721v197.894q0 148.623-84 276.364Q647-119 503-72q-5.56 2-11.12 3T480-68Zm0-71q115-39 188.5-145.5T742-523.21V-721.1L480-820l-262 98.968V-523q0 132 73.5 238.5T480-139Zm0-341Z"/></svg>
                <p class="text-white-figm text-center mt-5 hidden lg:block">Satisfait ou satisfait</p>
            </div>
            <div class="text-white-figma flex flex-col items-center md:w-1/4">
                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M480-147q79.917 0 136.958-56.75Q674-260.5 674-340q0-79.917-57.059-136.958Q559.882-534 479.941-534T343.5-476.941q-56.5 57.059-56.5 137T343.75-203.5Q400.5-147 480-147ZM349-572q25-15 54-23.5t61-10.5L359-814H228l121 242Zm-86 384q-23-32-36-70.5T214-340q0-43 13-81.5t36-70.5q-55 9-93 51.361-38 42.36-38 100.5Q132-282 170-239.5q38 42.5 93 51.5Zm434 0q55-9 93.5-51.361 38.5-42.36 38.5-100.5Q829-398 790.5-440.5 752-483 697-492q23 32 36.5 70.5T747-340q0 43-13.5 81.5T697-188ZM480-74q-41.611 0-78.844-11.465Q363.924-96.93 332-119q-11.667 2.667-23.833 3.833Q296-114 284-114q-94.091 0-159.546-65.408Q59-244.817 59-338.843 59-430 120-494.5 181-559 271-564L136-834q-9-18 2-35.5t31-17.5h190q21 0 38.5 11.5T425-846l55 111 56-111q9-18 26.5-29.5T601-887h190q20 0 31 17.5t2 35.5L691-566q89 6 150 70.649 61 64.65 61 155.351 0 95-66 160.5T675-114q-12 0-24-1t-23-4q-31.916 22.07-69.157 33.535Q521.601-74 480-74Zm0-266ZM349-572 228-814l121 242Zm131 287-52 40q-6 4-11 .5t-3-10.5l19-66-52-37q-5-3-3-10t8-7h64.797L472-443q1-7 8-7t9 7l20.962 68H574q6 0 8 7t-3 10l-52 37 20 66q1 7-4 10.5t-10-.5l-53-40Zm131-287 122-242H601l-80 161 28 54q16 5 32 12.062 16 7.063 30 14.938Z"/></svg>
                <p class="text-white-figm text-center mt-5 hidden lg:block">Expertise depuis pas longtemps</p>
            </div>
            <div class="text-white-figma flex flex-col items-center md:w-1/4">
                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M225.118-146q-51.618 0-87.868-36.167Q101-218.333 101-270H64q-15.75 0-26.375-10.625T27-307v-435q0-28.725 22.138-50.862Q71.275-815 100-815h514q30.75 0 51.875 21.125T687-742v101h78q17.118 0 32.434 7.375Q812.75-626.25 823-613l103 136q3 4.917 5 10.311 2 5.395 2 11.689v147.762q0 15.988-10.612 26.613Q911.775-270 897-270h-41q0 52-36.132 88-36.133 36-87.75 36-51.201 0-87.16-36.167Q609-218.333 609-270H349q0 52-36.132 88-36.133 36-87.75 36Zm-.136-73Q246-219 261-233.982q15-14.983 15-36Q276-291 261.018-306q-14.983-15-36-15Q204-321 189-306.018q-15 14.983-15 36Q174-249 188.982-234q14.983 15 36 15ZM100-343h24q20-25 45.071-38.5 25.072-13.5 55-13.5Q254-395 279.5-380.5 305-366 325-343h289v-399H100v399Zm631.982 124Q753-219 768-233.982q15-14.983 15-36Q783-291 768.018-306q-14.983-15-36-15Q711-321 696-306.018q-15 14.983-15 36Q681-249 695.982-234q14.983 15 36 15ZM687-430h182L765-568h-78v138ZM358-543Z"/></svg>
                <p class="text-white-figm text-center mt-5 hidden lg:block">Livraison chez votre voisin</p>
            </div>
            <div class="text-white-figma flex flex-col items-center md:w-1/4">
                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M237-232 126-121q-17 17-39.5 8.062Q64-121.875 64-147v-682q0-28.725 22.138-50.862Q108.275-902 137-902h686q28.725 0 50.862 22.138Q896-857.725 896-829v524q0 28.725-22.138 50.863Q851.725-232 823-232H237Zm-31-73h617v-524H137v599l69-75Zm-69 0v-524 524Z"/></svg>
                <p class="text-white-figm text-center mt-5 hidden lg:block">SAV et conseils par nos novices</p>
            </div>
        </div>
    </div>
    <div class="bg-gray-figma w-full">
        <div class="w-full flex flex-col items-center md:pl-16 md:pr-16 pl-5 pr-5 pt-16 pb-32">
            <h2 class="text-white-figma text-2xl mb-20">TAILLE DE CLAVIER</h2>
            <div class="w-full flex flex-col md:flex-row">
                @foreach ($categories as $category)
                    <a class="lg:w-4/12 bg-blue-variant-figma even:mt-10 even:mb-10 even:md:mt-0 even:md:mb-0 even:md:ml-10 even:md:mr-10 rounded-3xl flex justify-center overflow-hidden relative lg:hover:scale-105 lg:hover:shadow-lg shadow-md lg:transition-all" href="/category/{{ $category->id }}">
                        <img class="w-full h-full object-cover" src="{{ asset("image/domenico-loia-hGV2TfOh0ns-unsplash.jpg") }}" alt="category">
                        <span class="w-full h-full absolute bg-gradient-to-b from-black-figma"></span>
                        <p class="text-white-figma mt-5 absolute">{{ $category->name }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

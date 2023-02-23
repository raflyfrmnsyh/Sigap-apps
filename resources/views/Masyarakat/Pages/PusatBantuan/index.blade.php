@extends('Masyarakat.Tamplate.tamplate')

@section('content')

{{-- @dd($data) --}}
<header class="header2">
    <div class="container-md">
        <nav class="navbar-2">
            <a href="{{ route('profil.masyarakat') }}" class="back _Btn">
                <i class='bx bx-chevron-left'></i>
                <!-- <p>bc</p> -->
            </a>
            <div class="navbar-title">
                <span>Pusat Bantuan</span>
            </div>
            <a href="{{ route('beranda.masyarakat') }}" class="notif _Btn">
                <i class="bx bx-home"></i>
                <!-- <p>nt</p> -->
            </a>
        </nav>
    </div>

    
</header>

<section class="pusatBantuan">
    <div class="container-md">
        <div class="faQ">
            <div class="card-faq">
                <button class="faq-toggle">
                    <span class="_title">Sigap itu apa?</span>
                    <i class="i bx bx-plus"></i>
                </button>
                <div class="faq-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ad animi eum quod, hic
                        beatae ex. Possimus alias voluptas assumenda iusto qui quidem obcaecati, voluptatibus quod
                        minus suscipit optio laudantium?</p>
                </div>
            </div>
            <div class="card-faq">
                <button class="faq-toggle">
                    <span class="_title">Bagaimana cara membuat pengaduan?</span>
                    <i class="i bx bx-plus"></i>
                </button>
                <div class="faq-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ad animi eum quod, hic
                        beatae ex. Possimus alias voluptas assumenda iusto qui quidem obcaecati, voluptatibus quod
                        minus suscipit optio laudantium?</p>
                </div>
            </div>
        </div>
    </div>
</section>














<script>
    let faqBtn = document.querySelectorAll('.faq-toggle'),
        faqContent = document.querySelectorAll('.faq-content'),
        faqIcon = document.querySelectorAll('.faq-toggle > i');

    for (let i = 0; i < faqBtn.length; i++) {
        const btn = faqBtn[i];

        btn.addEventListener('click', () => {

            console.log(faqContent[i].style.height, faqContent[i].scrollHeight);
            if (parseInt(faqContent[i].style.height) != faqContent[i].scrollHeight) {
                faqContent[i].style.height = faqContent[i].scrollHeight + "px";
                faqIcon[i].classList.remove('bx-plus');
                faqIcon[i].classList.add('bx-minus');
            } else {
                faqContent[i].style.height = "0px";
                faqIcon[i].classList.remove('bx-minus');
                faqIcon[i].classList.add('bx-plus');
            }

            for (let j = 0; j < faqContent.length; j++) {

                if (j !== i) {
                    faqContent[j].style.height = "0px";
                    faqIcon[j].classList.remove('bx-minus');
                    faqIcon[j].classList.add('bx-plus');
                }
            }
        })
    }
</script>
    
@endsection
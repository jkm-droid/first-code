@extends('base.index')

@section('content')
    <div class="main-content">
    <!--carousel start-->
    <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" id="myCarousel">
            <div class="carousel-item active">
                <img class="d-block w-100 image" src="{{ asset('/site_images/port1.jpg') }}" alt="First slide">
                <div class="carousel-caption">
                    <h1>Welcome to FirstCode Corporation</h1>
                    <h4 class="display-4 put-black">Unlocking Africa's unlimited possibilities through industrialisation</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 image" src="{{ asset('/site_images/assembly.jpg') }}" alt="Second slide">
                <div class="carousel-caption">
                    <h1>Get</h1>
                    <h4 class="display-4 put-black">Financing, Analytic, FirstCode Systems and Investment Consultancy</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 image" src="{{ asset('/site_images/logistics3.jpg') }}" alt="Third slide">
                <div class="carousel-caption">
                    <h1>Providing Industrial Artificial Intelligence Backend Platform</h1>
                    <h4 class="display-4 put-black">An Integrated Industrial Information Centre for Africa</h4>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
{{--            <span class="sr-only">Previous</span>--}}
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
{{--            <span class="sr-only">Next</span>--}}
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
    <!--end carousel start-->

    <!---- site body/content-->
    <!--- services/features--->
    <div class="systems" id="systems">
        <div class="container" style="margin-top: 40px;">

            <h2 class="text-center" style="margin: 40px 0;">Our <strong class="put-red">Systems</strong></h2>

            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('site_images/financial-system.jpeg') }}" class="img-fluid rounded" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body end-text">
                            <h1 class="card-title"><strong class="put-gold">Financing</strong> System</h1>
                            Your guide to Project Financing
                            <p class="card-text">
                                The Financing Systems provide a digitally enabled functionality designed
                                to facilitate real B2B trade across oceans. It is complemented by a team of
                                seasoned and specialized consultants who guides the financiers and project developers
                                along the way, from project introduction to post financing phase. This is designed to
                                ensure comfortable ...
                            </p>
                            <p class="card-text"><small class="text-muted"><a href="{{ route('site.systems') }}">Read More</a></small></p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="service-separator">

            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4" id="systems-images-show">
                        <img src="{{ asset('site_images/consrct.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title"><strong class="put-gold">Analytics</strong> System</h1>
                            Digital Industry Analytics Tool Kit
                            <p class="card-text">This Digital Analytics Tool Kit is deployed by FirstCode Corporation Inc.
                                to assess and evaluate the performance of manufacturing and processing firms against some
                                standard benchmarks. Ranking is automated and this reduces human influence. The object is
                                to ensure a continual improvement in various ways on the part of the ...</p>
                            <p class="card-text"><small class="text-muted"><a href="{{ route('site.systems') }}">Read More</a></small></p>
                        </div>
                    </div>
                    <div class="col-md-4" id="systems-images-hide-small">
                        <img src="{{ asset('site_images/consrct.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>

            <hr class="service-separator">

            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('site_images/digital.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body end-text">
                            <h1 class="card-title"><strong class="put-gold">FirstCode Digital</strong> Application</h1>
                            The D-Planning Technology
                            <p class="card-text">FirstCode App is a D-Planning Technology designed to provide critical
                                information for manufacturing and processing sub-sectors in Africa as well as equipment
                                suppliers, traders, investors and financiers worldwide. The application is a subscription
                                platform that serves as a single window for industrialisation, trade and finance...</p>
                            <p class="card-text"><small class="text-muted"><a href="{{ route('site.systems') }}">Read More</a></small></p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="service-separator">

            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4" id="systems-images-show">
                        <img src="{{ asset('site_images/money0.jpeg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title"><strong class="put-gold">Investment</strong> Consultancy</h1>
                            For primed Industry Consultants
                            <p class="card-text">
                                FirstCode Corporation pool of consultants across Africa and Asia are
                                well versed in engagements involving Private-Private(PP) as well as Public-Private
                                partnerships(PPP) in different fields.

                                This perfectly works well in EPZs Free Trade Zones, Industrial Parks and Special Economic
                                Zones with a focus on accelerated...
                            </p>
                            <p class="card-text"><small class="text-muted"><a href="{{ route('site.systems') }}">Read More</a></small></p>
                        </div>
                    </div>
                    <div class="col-md-4" id="systems-images-hide-small">
                        <img src="{{ asset('site_images/money0.jpeg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- end services/features--->

    <!--- about us--->
    <div id="about">
        <div class="container" style="padding-top: 30px;">
            <h1 class="text-center put-grey">
                About <strong class="put-red">Us</strong><br>
                <span style="font-size: large; color: red;">Industrial Artificial Intelligence Backend Platform</span>
            </h1>

            <p>
                FirstCode Corporation Inc. is an Integrated Industrial Information Centre for Africa (IIICA)
                providing a broad transactional and B2B industrial trade backend by an Artificial Intelligence
                Applications that bring together Equipment Suppliers from across the world, Manufacturers and
                Processors (current and potential entrepreneurs) from across Africa, Development Finance Institutions,
                subject matter experts across the globe as well as other supply chain actors to ensure a seamless flow
                of information, facilitate and accelerate manufacturing uptake and productivity in Africa.

                At stake is the USD 19 trillion annual trade where Africa contributes a meagre 3% of the global total
                and increase the value of manufactured goods in Africa upwards from the current 1.5% of the global manufacturing output.
            </p><br><br>
        </div>
    </div>
    <!--- end about us--->

    <!----multi item carousel/partners--->
    <div class="container text-center mt-4">
        <h1 class="font-weight-light">
            <strong class="put-gold">Our</strong> <span style="color: black;">Partners</span>
        </h1>

        <div class="row mx-auto mt-4 justify-content-center">
            <div id="recipeCarousel" class="carousel slide my-carousel" data-bs-ride="carousel">
                <div class="carousel-inner multi-item-carousel" role="listbox">
                    <div class="carousel-item active my-carousel-item">
                        <div class="col-md-3 text-center">
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img src="{{ asset('site_images/transparent_picture.png') }}" class="img-fluid" alt="" >
                                    </a>
                                </div>
                                <div class="card-img-overlay text-center">
                                    <h2 class="put-red text-center">Fusion Informatics</h2>
                                    <div class="card-text">USA & India (Software Development & AI Systems)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item my-carousel-item">
                        <div class="col-md-3">
                            <a href="#contacts">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="{{ asset('site_images/transparent_picture.png') }}" class="img-fluid" alt="" >
                                    </div>
                                    <div class="card-img-overlay">
                                        <h2 class="put-red">Impact Africa</h2>
                                        <div class="card-text">Public Relations and Media Partners</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item my-carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('site_images/transparent_picture.png') }}" class="img-fluid" alt="" >
                                </div>
                                <div class="card-img-overlay">
                                    <h2 class="put-red">PK & Co. Advocates</h2>
                                    <div class="card-text"> Lawyers and Company Secretary</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item my-carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('site_images/transparent_picture.png') }}" class="img-fluid" alt="" >
                                </div>
                                <div class="card-img-overlay">
                                    <h2 class="put-red">RK Auditors and Financial Advisory </h2>
                                    <div class="card-text">Audit Management Firm</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item my-carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('site_images/transparent_picture.png') }}" class="img-fluid" alt="" >
                                </div>
                                <div class="card-img-overlay">
                                    <h2 class="put-red">Zenith Group of Companies </h2>
                                    <div class="card-text">Shanghai Business Network Partner</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item my-carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('site_images/transparent_picture.png') }}" class="img-fluid" alt="" >
                                </div>
                                <div class="card-img-overlay">
                                    <h2 class="put-red">Equity Group</h2>
                                    <div class="card-text">Bankers and Financial Advisory</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item my-carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('site_images/transparent_picture.png') }}" class="img-fluid" alt="" >
                                </div>
                                <div class="card-img-overlay">
                                    <h2 class="put-red">Eduscope Consultancy</h2>
                                    <div class="card-text">Projects Advisory</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item my-carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('site_images/transparent_picture.png') }}" class="img-fluid" alt="" >
                                </div>
                                <div class="card-img-overlay">
                                    <h2 class="put-red">Mank & Tank</h2>
                                    <div class="card-text">ICT Systems Advisory</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item my-carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('site_images/transparent_picture.png') }}" class="img-fluid" alt="" >
                                </div>
                                <div class="card-img-overlay">
                                    <h2 class="put-red">VOLKsHouse, USA</h2>
                                    <div class="card-text">Eco-Development and Real Estate Advisory</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item my-carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('site_images/transparent_picture.png') }}" class="img-fluid" alt="" >
                                </div>
                                <div class="card-img-overlay">
                                    <h2 class="put-red">ADMO Architects, Nairobi</h2>
                                    <div class="card-text">Architectural and Infrastructural Advisory</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item my-carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('site_images/transparent_picture.png') }}" class="img-fluid" alt="" >
                                </div>
                                <div class="card-img-overlay text-center">
                                    <h2 class="put-red">Cellulant Kenya Ltd. </h2>
                                    <div class="card-text">Computer Systems Design and Digital Payment Systems Partner</div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>

        <h5 class="mb-4 fw-light">FirstCode Corporation Partners</h5>
    </div>

    <script>
        let items = document.querySelectorAll('.my-carousel .my-carousel-item')

        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i=1; i<minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

    </script>
    <!----end multi item carousel/partners---->

    <!---our team--->
    <!--- about us--->
    <div id="our-team" style="background-color: #f3f0f0">

        <div class="container" style=" padding-top: 40px; padding-bottom: 20px;">
            <h1 class="text-center put-grey">
                <strong class="put-red">Our</strong> Team
            </h1>
            <h3 class="text-center" style="margin: 20px 0;">Advisory Board</h3>

            <div class="row text-center">
                <div class="col-lg-4">
                    <img class="img-circle" src="{{ asset('/team/Mukhisa_Kituyi.jpg') }}" alt="" width="140" height="140">
                    <h2>Dr. Mukhisa Kituyi</h2>
                    <p>
                        Secretary-General Emeritus of the United Nations Conference on Trade and Development,
                        UNCTAD. Prior to that, Kituyi was Chief Executive of the Kenya Institute of Governance, based in Nairobi.
                    </p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="{{ asset('team/David_Mwale_Ogoli.jpg') }}" alt="" width="140" height="140">
                    <h2>Prof. David Ogoli</h2>
                    <p>Professor of Architecture and Fellow of The Cambridge Commonwealth Trust. He holds an active
                        professional license as a registered architect in Kenya where there are many projects he
                        previously designed and participated in including the iconic Times Tower, Nairobi. </p>

                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="{{ asset('team/prof_henry_biwsa.png') }}"  alt="" width="140" height="140">
                    <h2>Prof. Henry Bwisa</h2>
                    <p>Holds a PhD in Economics and is a Full Professor of Entrepreneurship at the
                        Jomo Kenyatta University of Agriculture and Technology (JKUAT) in Kenya.
                        His stellar portfolio and more than 30 research collaborations have earned him
                        the title of Chairman of the African Agribusiness Incubators Network (AAIN). </p>

                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="{{ asset('team/Robert _J_Schneck.jpg') }}"  alt="" width="140" height="140">
                    <h2>Mr. Robert Schneck</h2>
                    <p>A seasoned business entrepreneur and manager based in New York, USA. He has wide
                        experience in initiating and managing wide portfolio eco-friendly infrastructural
                        development projects. He has held various portfolios in blue chip outfits in the world’s
                        commercial capital, New York City. He has worked in the sectors of project management, media,
                        public relations, insurance and real estate.</p>

                </div><!-- /.col-lg-4 -->
            </div>

            <h3 class="text-center" style="margin: 20px 0;">Management</h3>

            <div class="row text-center">
                <div class="col-lg-4">
                    <img class="img-circle" src="{{ asset('team/Jorge.jpeg') }}" alt="" width="140" height="140">
                    <h2>Eng. Jorge Forester</h2>
                    <p>Director General</p>
                </div>

                <div class="col-lg-4">
                    <img class="img-circle" src="{{ asset('team/Sande_Olocho_Photo.jpg') }}" alt="" width="140" height="140">
                    <h2>Mr. Sande Olocho</h2>
                    <p>Head of Projects</p>
                </div>

                <div class="col-lg-4">
                    <img class="img-circle" src="{{ asset('team/Martin Khamala.jpg') }}" alt="" width="140" height="140">
                    <h2>Eng. Martin Khamala</h2>
                    <p>Product Development</p>
                </div>

                <div class="col-lg-4">
                    <img class="img-circle" src="{{ asset('team/Peter Muchemi.jpg') }}" alt="" width="140" height="140">
                    <h2>Peter Muchemi</h2>
                    <p>Software Engineer</p>
                </div>

                <div class="col-lg-4">
                    <img class="img-circle" src="{{ asset('team/Peter Gachuru.jpg') }}" alt="" width="140" height="140">
                    <h2>Peter Gachuru</h2>
                    <p>IT Systems Specialist</p>
                </div>

                <div class="col-lg-4">
                    <img class="img-circle" src="{{ asset('team/Wamaitha.jpeg') }}" alt="" width="140" height="140">
                    <h2>E.K Wamaitha</h2>
                    <p>Finance & Admin.</p>
                </div>

                <div class="col-lg-4">
                    <img class="img-circle" src="{{ asset('team/abijah-kabiro.jpeg') }}" alt="" width="140" height="140">
                    <h2>Abijah Kabiro</h2>
                    <p>Communication Specialist</p>
                </div>

            </div>

        </div>
    </div>
    <!---end our team--->

    <!----end site body/content-->
    </div>
@endsection

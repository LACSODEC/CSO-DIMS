<x-layouts.app>
    <div class="ithub-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
        @slot('current')
        {{__('ithub.IT Hub/Business Incubator')}}
        @endslot
        @endcomponent

        <section class="ithub-section-1">
            <div class="con">
                <div class="slogan">
                    <h2>{{__('ithub.LACSODEC IT HUB & BUSINESS INCUBATOR')}}</h2>
                    <h2 style="color: red;">“{{__('ithub.We give every tech and business idea the wings to fly')}}”</h2>
                </div>
                {{-- <div class="ithub-subsection">
                    <div class="left">
                        <blockquote class="mission_work">
                            <div class="grid-container">
                                <div class="grid-item-1">
                                    <p>{{__('ithub.Our Mission')}}</p>
                                </div>
                                <div class="grid-item-2">
                                </div>
                                <div class="grid-item-3">
                                    <p>{{__('ithub.Is to identify, nurture and give wings to innovative and realistic Information technologies that solve present and future human needs in a sustainable manner')}}</p>
                                </div>
                            </div>
                            <br>
                            <div class="grid-container">
                                <div class="grid-item-1">
                                    <p>{{__('ithub.How We Work')}}</p>
                                </div>
                                <div class="grid-item-2">
                                </div>
                                <div class="grid-item-3">
                                    <p class="green">{{__('ithub.We provide the enabling environment, shared workspace, networking, linkages, break barriers and promote fair access to knowledge, opportunities and resources worldwide for national tech startups and tech jobs working from Cameroon')}}</p>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                </div> --}}
            </div>
        </section>

        <section class="ithub-section-2">
            <div class="con">
                <div class="title">
                    {{__('ithub.Our Mission')}}
                </div>
                <div class="content">
                    <p>
                        {{__('ithub.We identify, nurture and give wings to innovative and realistic information technologies that solve present and future human needs in a sustainable manner')}}
                    </p>
                </div>
            </div>
        </section>

        <div class="ithub-section-3">
            <div class="con">
                <div class="heading">
                    <div class="title">
                        {{__('ithub.Our Objectives')}}
                    </div>
                </div>
                <div class="objectives">
                    <ol class="obj">
                        <li>1. {{__('ithub.To provide co-working space for start-ups and tech enthusiasts to develope their talents, networks and systems that will be responding to the local development need of business, organizations, councils and other institutions.')}}</li>
                        <li>2. {{__('ithub.To connect and partner with different companies and experts in order to share knowledge, ideas and experiences.')}}</li>
                        <li>3. {{__('ithub.To gather important developmental information and share with the community.')}}</li>
                        <li>4. {{__('ithub.To create funding opportunities for startups.')}}</li>
                        <li>5. {{__('ithub.To provide mentoring, advice and coaching to startups and tech enthusiasts.')}}</li>
                        <li>6. {{__('ithub.To promote IT skills for university graduates as well school drop outs for employability.')}}</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="ithub-section-4">
            <div class="heading">
                <div></div>
                <div></div>
                <div class="title">
                    {{__('ithub.Our Services')}}
                </div>
            </div>
            <div class="services">
                <div class="container">
                    <div class="row pt-3">
                        <div class="col-sm-12 col-md-6 col-lg-6 ss">
                            <div class="single-service rounded border">
                                <div class="service-header d-flex align-items-center justify-content-between pb-3">
                                    <h4>
                                        <span class="h5">Service 1</span>
                                        <br>
                                        {{__('ithub.Web Development & Programming')}}
                                    </h4>
                                    <i class="fas fa-code fa-2x"></i>
                                </div>
                                <button class="btn btn-outline-success mt-3" data-bs-toggle="modal" data-bs-target="#Service1Modal">{{__('ithub.More details')}}</button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="single-service rounded border">
                                <div class="service-header d-flex align-items-center justify-content-between pb-3">
                                    <h4>
                                        <span class="h5">Service 2</span>
                                        <br>
                                        {{__('ithub.Web & Cloud Hosting')}}
                                    </h4>
                                    <i class="fas fa-cloud fa-2x"></i>
                                </div>
                                <button class="btn btn-outline-success mt-3" data-bs-toggle="modal" data-bs-target="#Service2Modal">{{__('ithub.More details')}}</button>
                                <a class="btn btn-outline-success mt-3" href="https://zocamhost.us/" target="__blank">{{__('ithub.Host your product')}}</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="single-service rounded border">
                                <div class="service-header d-flex align-items-center justify-content-between pb-3">
                                    <h4>
                                        <span class="h5">Service 3</span>
                                        <br>
                                        {{__('ithub.CyberSecurity & System Administration')}}
                                    </h4>
                                    <i class="fas fa-shield-halved fa-2x"></i>
                                </div>
                                <button class="btn btn-outline-success mt-3" data-bs-toggle="modal" data-bs-target="#Service3Modal">{{__('ithub.More details')}}</button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="single-service rounded border">
                                <div class="service-header d-flex align-items-center justify-content-between pb-3">
                                    <h4>
                                        <span class="h5">Service 4</span>
                                        <br>
                                        {{__('ithub.Networking')}}
                                    </h4>
                                    <i class="fas fa-network-wired fa-2x"></i>
                                </div>
                                <button class="btn btn-outline-success mt-3" data-bs-toggle="modal" data-bs-target="#Service4Modal">{{__('ithub.More details')}}</button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="single-service rounded border">
                                <div class="service-header d-flex align-items-center justify-content-between pb-3">
                                    <h4>
                                        <span class="h5">Service 5</span>
                                        <br>
                                        {{__('ithub.Database Administration')}}
                                    </h4>
                                    <i class="fas fa-database fa-2x"></i>
                                </div>
                                <button class="btn btn-outline-success mt-3" data-bs-toggle="modal" data-bs-target="#Service5Modal">{{__('ithub.More details')}}</button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="single-service rounded border">
                                <div class="service-header d-flex align-items-center justify-content-between pb-3">
                                    <h4>
                                        <span class="h5">Service 6</span>
                                        <br>
                                        {{__('ithub.Digitalization of CSOs')}}
                                    </h4>
                                    <i class="fas fa-globe fa-2x"></i>
                                </div>
                                <button class="btn btn-outline-success mt-3" data-bs-toggle="modal" data-bs-target="#Service6Modal">{{__('ithub.More details')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Modals -->
        <div class="modal fade" id="Service1Modal" tabindex="-1" aria-labelledby="Service1ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Service1ModalLabel">{{__('ithub.Web Development & Programming')}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>{{__('ithub.Get the best application or website for your business. We provide sophisticated web-based applications that will help boost your business within a twinkle of an eye.')}}</li>
                            <br>
                            <li>{{__('ithub.Training in languages like HTML, CSS, JAVASCRIPT, PYTHON...')}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Service2Modal" tabindex="-1" aria-labelledby="Service2ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Service2ModalLabel">{{__('ithub.Web & Cloud Hosting')}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>{{__('ithub.No need stressing yourself looking for a hosting platform. In partnership with Zocam Host, we offer great hosting (Shared and Wordpress) options with very affordable prices. For more details, click on the button below.')}}</p>
                        <a class="btn btn-outline-success mt-3" href="https://zocamhost.us/" target="__blank">{{__('ithub.Host your product')}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade p-2" id="Service4Modal" tabindex="-1" aria-labelledby="Service4ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Service4ModalLabel">{{__('ithub.Networking')}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>{{__('ithub.We offer services that entail installation of devices like network points, server setups etc...')}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Service5Modal" tabindex="-1" aria-labelledby="Service5ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Service5ModalLabel">{{__('ithub.Database Administration')}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>{{__('ithub.We build sophisticated and secured databases.')}}</li>
                            <li>{{__('ithub.We offer trainings in database administration.')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Service6Modal" tabindex="-1" aria-labelledby="Service6ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Service6ModalLabel">{{__('ithub.Digitalization of CSOs')}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <p>{{__('ithub.In order to assist CSOs go digital, we offer services that help them grow in that light. These services are:')}}</p>
                            <br>
                            <li>{{__('ithub.Financial and administrative management tools.')}}</li>
                            <li>{{__('ithub.Development and management of CSO-DIMS.')}}</li>
                            <li>{{__('ithub.Development and deployment of CSO financial management systems and training.')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
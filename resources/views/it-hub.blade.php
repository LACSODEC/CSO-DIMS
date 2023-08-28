<x-layouts.app>
    <div class="ithub-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
        @slot('current')
        {{__('header.IT Hub/Business Incubator')}}
        @endslot
        @endcomponent

        <section class="ithub-section-1">
            <div class="con">
                <div class="slogan">
                    <h2>LUKMEF IT HUB & BUSINESS INCUBATOR</h2>
                    <h2 style="color: red;">“We give every tech and business idea the wings to fly”</h2>
                </div>
                <br>
                <div class="ithub-subsection">
                    <div class="left">
                        <blockquote class="mission_work">
                            <div class="grid-container">
                                <div class="grid-item-1">
                                    <p>Our Mission</p>
                                </div>
                                <div class="grid-item-2">
                                </div>
                                <div class="grid-item-3">
                                    <p>Is to identify, nurture and give wings to innovative and realistic Information technologies that solve present and future human needs in a sustainable manner
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="grid-container">
                                <div class="grid-item-1">
                                    <p>How We Work</p>
                                </div>
                                <div class="grid-item-2">
                                </div>
                                <div class="grid-item-3">
                                    <p class="green">We provide the enabling environment, shared workspace, networking, linkages, break barriers and promote fair access to knowledge, opportunities and resources worldwide for national tech startups and tech jobs working from Cameroon </p>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <div class="right">
                        <div class="hub-pics">
                            <figure>
                                <img src="{{ asset('images/ithub/admin-space.jpg') }}" alt="admin space" />
                                <figcaption>
                                    Fig. 1 - "Hub's administrator's desk"
                                </figcaption>
                            </figure>
                            <figure>
                                <figcaption>
                                    Fig. 2 - "Available workspace"
                                </figcaption>
                                <img src="{{ asset('images/ithub/workspace-1.jpg') }}" alt="work space" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ithub-section-2">
            <div class="con">
                <div class="left">

                </div>
                <div class="right">

                </div>
            </div>
        </section>
    </div>
</x-layouts.app>
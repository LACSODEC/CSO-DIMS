<x-layouts.app>
    <div class="expert-directory-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Human Resource Directory
            @endslot
        @endcomponent

        <section class="expert-directory-section">
            <div class="con">
                <div class="main-content">
                    <div class="expert-directory-grid">
                        @if (isset($experts))
                        @foreach ($experts as $expert)
                            <a href="{{ route('expert-directory-details', ['expert' => $expert->id]) }}"
                                class="expert-card">
                                <img src="{{ asset($expert->image) }}" alt="">
                                <h4>{{ $expert->user->name }}</h4>
                                <h5>{{ $expert->position }}</h5>
                                <div class="flex">
                                    <div class="left">
                                        <span>{{ $expert->sex }}</span> <span>{{ $expert->work_duration }}</span>
                                    </div>
                                    <div class="status {{ $expert->status }}">{{ $expert->status }}</div>
                                </div>
                                <p>{{ $expert->location }} - {{ $expert->nationality }} - {{ $expert->company }}</p>
                            </a>
                        @endforeach
                        @endif
                    </div>
                    <div class="pagination">
                        {{ $experts->links() }}
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>

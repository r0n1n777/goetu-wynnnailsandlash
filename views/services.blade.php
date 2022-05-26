<h1 class="text-center my-5 fw-bold">Our Menu Of Services</h1>
@foreach ($services as $service => $info)
<section class="mt-5" id="{{ $info[0] }}">
    <div class="container mb-5 bg-light p-0 rounded shadow">
        <div class="row g-0">
            <div class="col">
                <img src="@asset('resources/img/services/'.$info[0].'.jpg')" class="img-fluid h-100" style="object-fit: cover; -o-object-fit: cover;">
            </div>
            <div class="col d-flex flex-column align-items-center">
                <h1 class="text-start fw-bold pt-3">{{ $service }}</h1>
                <table class="table table-striped table-primary table-borderless">
                    <thead>
                        <th class="bg-transparent p-2 px-5"></th>
                    </thead>
                    <tbody>
                        @if ($service == 'Acrylic Nails')
                        <tr>
                            <td></td>
                            <td class="text-muted fw-bold">Full Set</td>
                            <td class="text-muted fw-bold">Fill</td>
                        </tr>
                        @endif

                        @foreach ($info['Menu'] as $menu => $info)
                            @if ($service == 'Acrylic Nails')
                                <tr>
                                    <td>
                                        <b>{{ $menu }}</b>
                                    </td>
                                    <td class="fw-bold">@if (!empty($info[0])) $@endif{{ $info[0] }}</td>
                                    <td class="fw-bold">@if (!empty($info[1])) $@endif{{ $info[1] }}</td>
                                </tr>
                            @elseif ($service == 'Eyelash Extensions')
                                <tr>
                                    <td>
                                        <b class="text-decoration-underline">{{ $menu }}</b>
                                    </td>
                                    @if (!is_array($info))
                                    <td class="fw-bold">${{ $info }}</td>
                                    @elseif (is_array($info))
                                    <td></td>
                                        @foreach ($info as $name => $price)
                                        <tr>
                                            <td>{{ $name }}</td>
                                            <td class="fw-bold">@if ($price != 'Start Full Set') $@endif{{ $price }}</td>
                                        </tr>
                                        @endforeach
                                    @else
                                    <td class="fw-bold">${{ $info[0] }}</td>
                                    @endif
                                </tr>
                            @else
                            <tr>
                                <td>
                                    <b>{{ $menu }}</b><br>
                                    <span class="text-muted">{{ $info[1] }}</span>
                                </td>
                                <td class="fw-bold">${{ $info[0] }}</td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endforeach

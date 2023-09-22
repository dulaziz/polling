@extends('layouts.main')
@section('child')
@php
        $epoch_start = $voteUnit->date_start;
        $dt = new DateTime("@$epoch_start"); // convert UNIX timestamp to PHP DateTime
        $date_start = $dt->format('d-m-Y');

        $epoch_end = $voteUnit->date_end;
        $dt = new DateTime("@$epoch_end"); // convert UNIX timestamp to PHP DateTime
        $date_end = $dt->format('d-m-Y');

        $times = round(microtime(true));
        $ts = new DateTime("@$times");
        $today = $ts->format('d-m-Y');
    @endphp
    <div class="container mt-5">
        <div class="col-md-10 mx-auto mb-5 card">
            <div class="card-body  p-3">
                <div class="row d-flex align-items-center" data-aos="zoom-in">
                    <div class="col-md-4">
                        <img src="{{asset('storage/' . $voteUnit->thumbnail) }}" class="pstr_thumb" alt="...">
                    </div>

                    <div class="col-md-8">
                        @if ($date_end <= $today)
                            <a href="/pollingUnitBar/{{ $voteUnit->slug }}" class="mb-3 text-decoration-none text-dark">
                                <h2><strong>{{ $voteUnit->title }}</strong></h2>
                            </a>
                        @else
                            <a href="/polling/{{ $voteUnit->slug }}" class="mb-3 text-decoration-none text-dark">
                                <h2><strong>{{ $voteUnit->title }}</strong></h2>
                            </a>
                        @endif

                        <hr class="d-none d-md-block">

                        <div class="d-none d-md-block">
                            {!! $voteUnit->description !!}
                        </div>

                        <div class="d-flex flex-column">
                            @if ($epoch_end <= $times)
                                <small class="text-danger fst-italic mb-1"><i class="fas fa-times-circle"></i> Closed
                                    Polling</small>
                            @elseif(\Carbon\Carbon::parse(now())->lt($date_start))
                                <small class="text-primary fst-italic me-md-3"><i class="fas fa-check-circle mb-0"></i>
                                    Coming Soon Polling </small>
                                <small>{{ $date_start }} s/d {{ $date_end }}</small>
                            @else
                                <small class="text-success fst-italic mb-1"><i class="fas fa-check-circle"></i> Live
                                    Polling</small>
                                <small>{{ $date_start }} s/d {{ $date_end }}</small>
                            @endif
                        </div>
                        <hr class="d-block d-md-none">

                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="gap-2 d-flex justify-content-end">
                    <a href="/admin/export-voters/{{$voteUnit->slug}}" class="btn btn-info btn-sm" target="_blank"><i
                            class="fas fa-print"></i> Export Voters</a>
                    <a href="/admin" class="btn btn-secondary btn-sm" type="button"><i
                            class="fas fa-reply"></i> Back</a>
                </div>
            </div>
        </div>


        <div class="table-responsive mb-5">
            <table class="table table-sm" id="dataTable" style="width: 100%; background-color: white;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Kandidat Dipilih</th>
                        <th>Tgl & Jam. Voting</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($voters as $vote)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $vote->user->name }}</td>
                            <td>{{ $vote->user->email }}</td>
                            <td>{{ $vote->voteItem->vote_name }}</td>
                            <td>{{ $vote->created_at }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

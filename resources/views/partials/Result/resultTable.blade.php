{{-- Poll unit table result --}}
<div class="table-responsive">
    <table class="table table-sm" style="width: 900px;">
        <thead>
          <tr>
            <th scope="col" style="width: 20px;">No</th>
            <th scope="col" style="width: 200px;">Name</th>
            <th scope="col" style="width: 520px;">Progressbar</th>
            <th scope="col">Response</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
        @foreach ($total_votings as $tv)
          <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>{{ $tv->vote_name }}</td>
            <td>
                <div class="progress mt-1">
                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </td>
            <td>

                {{-- Cari jumlah persentase dari pemilih --}}
                @php
                    $total_vote = $tv->response / $total_user_vote * 100;
                @endphp
                <p class="mb-0">{{ $total_vote }}% | {{ $total_user_vote }} Suara</p>
            </td>
          </tr>

          {{-- <tr>
            <th scope="row">2</th>
            <td>Atang Trisnanto</td>
            <td>
                <div class="progress mt-1">
                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </td>
            <td>65% | 650 Suara</td>
          </tr>

          <tr>
            <th scope="row">3</th>
            <td>Muzakir</td>
            <td>
                <div class="progress mt-1">
                    <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </td>
            <td>45% | 450 Suara</td>
          </tr> --}}

          <tr>
            <td colspan="3"><strong>Total Response</strong></td>
            <td><strong> 100% | 1950 Suara</strong></td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <style>
      /* @media print {
    body * {
        visibility: hidden;
    }
    .print-container, .print-container * {
        visibility: visible;
    }
    .print-container {
        position: absolute;
        left: 0px;
        top: 0px;
        margin: 50px 0 50px 0;
    }
}

.progress {
    background-image: none;
    -webkit-print-color-adjust: exact;
    box-shadow: inset 0 0;
    -webkit-box-shadow: inset 0 0;
}
  
.bar {
    background-image: none;
    -webkit-print-color-adjust: exact;
    box-shadow: inset 0 0;
    -webkit-box-shadow: inset 0 0;
} */
    </style>

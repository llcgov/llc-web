<h1 class="logo mr-auto"><a href="/"><img src="{{ asset('img/republic_of_ph.png') }}" alt=""></a></h1>
<nav class="nav-menu d-none d-lg-block">
  <ul>
    <li class="active"><a href="{{ route('client.home') }}">Home</a></li>
    <li class="drop-down"><a href="">Online Services</a>
      <ul>
        <li><a href="https://online.lapulapucity.gov.ph">New/Renew Business Permit</a></li>
        <li><a href="{{ route('client.safetyseal') }}">Request Establishment Safety Seal</a></li>
        {{-- <li><a href="#">Local Civil Registry Services</a></li>
        <li><a href="#">Cedula</a></li>
        <li><a href="#">Tax Decleration</a></li>
        <li><a href="#">HR Online Requests</a></li> --}}
      </ul>
    </li>
    <li class="drop-down"><a href="">Transparency</a>
      <ul>
        <li><a href="{{ route('client.transparency') }}">Full Disclosure Data</a></li>
        <li><a href="{{ route('client.eo') }}">Executive Order</a></li>
        <li><a href="#">Citizen's Chart</a></li>
      </ul>
    </li>
    <li><a href="{{ route('client.downloadables') }}">Downloadables</a></li>
    <li><a href="{{ route('client.about') }}">About</a></li>

  </ul>
</nav>
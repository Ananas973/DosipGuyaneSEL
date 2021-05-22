@if(!Auth::user() && !Auth::guard('company')->user())
<div class="emploginbox">
	<div class="container">		
		<div class="titleTop">
			<div class="subtitle">{{__('À la recherche de candidats ?!')}}</div>
           <h3>{{__('Publiez une offre maintenant')}}  </h3>
			<h4>{{__('Engagez le meilleur candidat !')}}</h4>
        </div>
		<p>La DOSIP Guyane, partenaire de l'insertion professionnelle des étudiants en Guyane.</p>
		<div class="viewallbtn"><a href="{{route('register')}}">{{__('Publiez une offre')}}</a></div>
	</div>
</div>
@endif
<!-- Modal -->
<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<ul class="list-unstyled">
					@guest
					<li>
						<a href="{{ route('login') }}">{{ __('Login') }}</a>
					</li>
					<li>
						<a href="{{ route('register') }}">{{ __('Register') }}</a>
					</li>
					@else
					<li>
						<a href="{{ route('mypage') }}">{{ __('My Page') }}</a>
					</li>
					
					<li>
						<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</li>
					@endguest
				</ul>
			</div>
		</div>
	</div>
</div>
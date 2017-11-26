<div class="row">
					<div class="col-md-12">
						<!-- Nav tabs -->
						<div class="card">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a
									href="#admin_send_notification"
									aria-controls="admin_send_notification" role="tab"
									data-toggle="tab">Send Notification</a></li>
								<li role="presentation"><a
									href="#admin_send_event_update_events"
									aria-controls="admin_send_event_update_events" role="tab"
									data-toggle="tab">Send Event/Update/News </a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active"
									id="admin_send_notification">@include('userpanel.adminviews.admin_send_notification')</div>
								<div role="tabpanel" class="tab-pane"
									id="admin_send_event_update_events">@include('userpanel.adminviews.admin_send_event')</div>
							</div>
						</div>
					</div>
				</div>
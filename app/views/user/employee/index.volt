


{{ content() }}


<section class="content">
    <div class="container-fluid">
       <div class="block-header">
            <h2>EMPLOYEE</h2>
            </div>
            <!-- Input -->
			 <div class="row clearfix">
				{{ link_to('Employee/new', 'Add Employee', 'class' : 'btn btn-primary') }}
				<hr>

				<table class="table table-hover">
					<tr>
						<th>Id</th>
						<th>Firstname</th> 
						<th>Lastname</th>
						<th>Age</th>
						<th>Address</th>
						<th>Action</th>
					</tr>
					{% for data in emps %}
					<tr>
						<td>{{ data.id }}</td>
						<td>{{ data.firstname|e|capitalize }}</td>
						<td>{{ data.lastname|e|capitalize }}</td>
						<td>{{ data.age|e }}</td>
						<td>{{ data.address|e|capitalize }}</td>
						<td>
							{{ link_to('employee/detail/' ~ data.id, 'Edit', 'class' : 'btn btn-success btn-sm') }}
							{{ link_to('employee/delete/' ~ data.id, 'Delete', 'class' : 'btn btn-danger btn-sm') }}
						</td>
					</tr>
					{% endfor %}
				</table>

			</div>
		</div>
	</div>
</section>

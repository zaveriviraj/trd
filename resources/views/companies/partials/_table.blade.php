<table class="table table-bordered table-hover" style="width: 100%">
    <thead>
        <tr>
            <th>Priority</th>
            <th>RAP Division</th>
            <th>Account #</th>
            <th>Company Name</th>
            <th>Owner Name</th>
            <th>Designation</th>
            <th>Landline</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Website</th>
            <th>Size</th>
            <th>Company Type</th>
            <th>Comments</th>
            <th>Deals In</th>
            <th>Deals In Comments</th>
            <th>Exhibitions</th>
            <th>Brands</th>
            <th>Address</th>
            <th>City</th>
            <th>Zip Code</th>
            <th>State</th>
            <th>Country</th>
            <th>Country Code</th>
            <th>State Code</th>
            <th>Other Landline</th>
            <th>Other Mobile</th>
            <th>Other Email</th>
            <th>Rough</th>
            <th>Sight Details</th>
            <th>Tender Details</th>
            <th>Size</th>
            <th>Size Extra</th>
            <th>Shape</th>
            <th>Shape Extra</th>
            <th>Color</th>
            <th>Color Extra</th>
            <th>Clarity</th>
            <th>Clarity Extra</th>
            <th>Cut</th>
            <th>Cut Extra</th>
            <th>Certs</th>
            <th>Certs Extra</th>
            <th>Branches Extra</th>
            <th>Jewelry Manufacturing</th>
            <th>Products</th>
            <th>Jewelry Locations</th>
            <th>Jewelery Comments</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($companies as $company)
            <tr>
                <td><span class="badge badge-pill badge-primary" style="background-color: {{ $company->priority ? $company->priority->color : '' }}">{{ $company->priority ? $company->priority->name : '' }}</span></td>
                <td>{{ $company->divisions }}</td>
                <td>{{ $company->associations }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->owner_name }}</td>
                <td>{{ $company->owner_designation }}</td>
                <td>{{ $company->landline }}</td>
                <td>{{ $company->mobile }}</td>
                <td>{{ $company->email }}</td>
                <td>{{ $company->website }}</td>
                <td>{{ $company->companysize ? $company->companysize->name : '' }}</td>
                <td>{!! implode(', ' , $company->companytypes->pluck('name')->toArray()) !!}</td>
                <td>{{ $company->company_comments }}</td>
                <td>{!! implode(', ' , $company->companydeals->pluck('name')->toArray()) !!}</td>
                <td>{{ $company->deals_comments }}</td>
                <td>{{ $company->exhibitions }}</td>
                <td>{{ $company->brands }}</td>
                <td>{{ $company->address }}</td>
                <td>{{ $company->city }}</td>
                <td>{{ $company->zip }}</td>
                <td>{{ $company->state ? $company->state->name : '' }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td>{{ $company->other_landline }}</td>
                <td>{{ $company->other_mobile }}</td>
                <td>{{ $company->other_email }}</td>
                <td>{{ $company->rough_details }}</td>
                <td>{{ $company->sight_details }}</td>
                <td>{{ $company->tender_details }}</td>
                <td>{!! implode(', ' , $company->sizes->pluck('name')->toArray()) !!}</td>
                <td>{{ $company->size_comments }}</td>
                <td>{!! implode(', ' , $company->shapes->pluck('name')->toArray()) !!}</td>
                <td>{{ $company->shape_comments }}</td>
                <td>{!! implode(', ' , $company->colors->pluck('name')->toArray()) !!}</td>
                <td>{{ $company->color_comments }}</td>
                <td>{!! implode(', ' , $company->clarities->pluck('name')->toArray()) !!}</td>
                <td>{{ $company->clarity_comments }}</td>
                <td>{!! implode(', ' , $company->cuts->pluck('name')->toArray()) !!}</td>
                <td>{{ $company->cut_comments }}</td>
                <td>{!! implode(', ' , $company->certs->pluck('name')->toArray()) !!}</td>
                <td>{{ $company->cert_comments }}</td>
                <td>{{ $company->branches_comments }}</td>
                <td>{{ $company->jewelry_manufacturing ? 'Yes' : 'No' }}</td>
                <td>{!! implode(', ' , $company->products->pluck('name')->toArray()) !!}</td>
                <td>{{ $company->jewelry_locations }}</td>
                <td>{{ $company->jewelry_comments }}</td>
            </tr>
        @empty

        @endforelse
    </tbody>
</table>
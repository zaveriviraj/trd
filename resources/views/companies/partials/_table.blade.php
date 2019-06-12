<table class="table table-bordered table-hover" style="width: 100%">
    <thead>
        <tr>
            <th>Priority</th>
            <th>RAP Division</th>
            <th>Account #</th>
            <th>Company Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Website</th>
            <th>Size</th>
            <th>Company Type</th>
            <th>Deals In</th>
            <th>PR & TRS</th>
            <th>Brands</th>
            <th>Address</th>
            <th>City</th>
            <th>Zip Code</th>
            <th>State</th>
            <th>Country</th>
            <th>Country Code</th>
            <th>State Code</th>
            <th>Individual 1 Title</th>
            <th>Individual 1 Name</th>
            <th>Individual 1 Designation</th>
            <th>Individual 1 Email</th>
            <th>Individual 1 Conact</th>
            <th>Individual 2 Title</th>
            <th>Individual 2 Name</th>
            <th>Individual 2 Designation</th>
            <th>Individual 2 Email</th>
            <th>Individual 2 Conact</th>
            <th>Individual 3 Title</th>
            <th>Individual 3 Name</th>
            <th>Individual 3 Designation</th>
            <th>Individual 3 Email</th>
            <th>Individual 3 Conact</th>
            <th>Individual 4 Title</th>
            <th>Individual 4 Name</th>
            <th>Individual 4 Designation</th>
            <th>Individual 4 Email</th>
            <th>Individual 4 Conact</th>
            <th>Rough</th>
            <th>Sight Holder</th>
            <th>Sight Details</th>
            <th>Tender Details</th>
            <th>Rough Deals</th>
            <th>Size</th>
            <th>Size Comments</th>
            <th>Shape</th>
            <th>Shape Comments</th>
            <th>Color</th>
            <th>Color Comments</th>
            <th>Clarity</th>
            <th>Clarity Comments</th>
            <th>Cut</th>
            <th>Cut Comments</th>
            <th>Certs</th>
            <th>Certs Comments</th>
            <th>Branches Comments</th>
            <th>Product Comments</th>
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
                <td>{{ $company->email }}</td>
                <td>{{ $company->phone }}</td>
                <td>{{ $company->website }}</td>
                <td>{{ $company->companysize ? $company->companysize->name : '' }}</td>
                <td>{!! implode(', ' , $company->companytypes->pluck('name')->toArray()) !!}</td>
                <td>{!! implode(', ' , $company->companydeals->pluck('name')->toArray()) !!}</td>
                <td>{{ $company->promotions }}</td>
                <td>{{ $company->brands }}</td>
                <td>{{ $company->address }}</td>
                <td>{{ $company->city }}</td>
                <td>{{ $company->zip }}</td>
                <td>{{ $company->state ? $company->state->name : '' }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td>{{ $company->contact_title_1 }}</td>
                <td>{{ $company->contact_name_1 }}</td>
                <td>{{ $company->contact_designation_1 }}</td>
                <td>{{ $company->contact_email_1 }}</td>
                <td>{{ $company->contact_mobile_1 }}</td>
                <td>{{ $company->contact_title_2 }}</td>
                <td>{{ $company->contact_name_2 }}</td>
                <td>{{ $company->contact_designation_2 }}</td>
                <td>{{ $company->contact_email_2 }}</td>
                <td>{{ $company->contact_mobile_2 }}</td>
                <td>{{ $company->contact_title_3 }}</td>
                <td>{{ $company->contact_name_3 }}</td>
                <td>{{ $company->contact_designation_3 }}</td>
                <td>{{ $company->contact_email_3 }}</td>
                <td>{{ $company->contact_mobile_3 }}</td>
                <td>{{ $company->contact_title_4 }}</td>
                <td>{{ $company->contact_name_4 }}</td>
                <td>{{ $company->contact_designation_4 }}</td>
                <td>{{ $company->contact_email_4 }}</td>
                <td>{{ $company->contact_mobile_4 }}</td>
                <td>{{ $company->rough }}</td>
                <td>{{ $company->sight_holder ? 'Yes' : 'No' }}</td>
                <td>{{ $company->sight_details }}</td>
                <td>{{ $company->tender_details }}</td>
                <td>{{ $company->rough_deals }}</td>
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
                <td>{!! implode(', ' , $company->products->pluck('name')->toArray()) !!}</td>
                <td>{{ $company->products_comments }}</td>
                <td>{{ $company->jewelry_manufacturing ? 'Yes' : 'No' }}</td>
                <td>{{ $company->jewelry_locations }}</td>
                <td>{{ $company->jewelry_comments }}</td>
            </tr>
        @empty

        @endforelse
    </tbody>
</table>
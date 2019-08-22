<table class="table table-bordered table-hover" style="width: 100%">
    <thead>
        <tr>
            {{-- <th>Priority</th> --}}
            <th>OFC #</th>
            <th>Company Name</th>
            <th>RAP Division</th>
            <th>Contact Person</th>
            <th>Job Title</th>
            <th>Company Size</th>
            <th>Country</th>
            <th>Website</th>
            <th>Sight</th>
            <th>Roughs</th>
            <th>Shapes</th>
            <th>Sizes</th>
            <th>Color</th>
            <th>Clarity</th>
            <th>Makes</th>
            <th>Manufacturing Units</th>
            <th>Branches</th>
            <th>Certs</th>
            <th>Comments</th>
            <th>Website Comments</th>
            <th>Exhibiting / Markets</th>
            <th>Jewlery Manufacturing</th>
            <th>Jewlery Trading</th>
            <th>Relation</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>ZIP</th>
            <th>Cell</th>
            <th>Email</th>
            <th>Office</th>
            <th>Phone</th>
            <th>Fax</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($companies as $company)
            <tr>
                {{-- <td><span class="badge badge-pill badge-primary" style="background-color: {{ $company->priority ? $company->priority->color : '' }}">{{ $company->priority ? $company->priority->name : '' }}</span></td> --}}
                <td>{{ $company->associations }}</td>
                <td><a href="{{ route('companies.show', $company->id) }}">{{ $company->company_name }}</a></td>
                <td>{{ $company->divisions }}</td>
                <td>{{ $company->person }}</td>
                <td>{{ $company->job_title }}</td>
                <td>{{ $company->companysize ? $company->companysize->name : '' }}</td>
                <td>{{ $company->country }}</td>
                <td>{{ $company->website }}</td>
                <td>{{ $company->sight_holder ? 'Yes' : 'No' }}</td>
                <td>{!! implode(', ' , $company->roughs->pluck('name')->toArray()) !!}</td>
                <td>{!! implode(', ' , $company->shapes->pluck('name')->toArray()) !!}</td>
                <td>{{ $company->deals_size }}</td>
                <td>{{ $company->deals_color }}</td>
                <td>{{ $company->deals_clarity }}</td>
                <td>{{ $company->deals_make }}</td>
                <td>{{ $company->manufacturing_units }}</td>
                <td>{{ $company->branches }}</td>
                <td>{!! implode(', ' , $company->certs->pluck('name')->toArray()) !!}</td>
                <td title="{{ $company->comments }}">{{ str_limit($company->comments, 50) }}</td>
                <td title="{{ $company->website_comments }}">{{ str_limit($company->website_comments, 50) }}</td>
                <td>{{ $company->exhibiting_markets }}</td>
                <td>{{ $company->jewellery_manufacturing ? 'Yes' : 'No' }}</td>
                <td>{{ $company->jewellery_trading ? 'Yes' : 'No' }}</td>
                <td>{{ $company->relationship }}</td>
                <td title="{{ $company->address }}">{{ str_limit($company->address, 50) }}</td>
                <td>{{ $company->city }}</td>
                <td>{{ $company->state }}</td>
                <td>{{ $company->zip }}</td>
                <td>{{ $company->cell }}</td>
                <td>{{ $company->email }}</td>
                <td>{{ $company->office }}</td>
                <td>{{ $company->phone }}</td>
                <td>{{ $company->fax }}</td>
            </tr>
        @empty

        @endforelse
    </tbody>
</table>
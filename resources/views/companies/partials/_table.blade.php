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
            <th>Rough</th>
            <th>Trader</th>
            <th>Shape</th>
            <th>Size</th>
            <th>Color</th>
            <th>Clarity</th>
            <th>Make</th>
            <th>Manufacturing Units</th>
            <th>Branches</th>
            <th>Cert</th>
            <th>Comments</th>
            <th>Website Comment</th>
            <th>Exhibiting / Markets</th>
            <th>Jewelry Manufacturing</th>
            <th>Jewelry Trading</th>
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
            <tr data-company-id={{ $company->id }} class="{{ $company->isFavorited ? 'table-warning' : '' }}">
                {{-- <td><span class="badge badge-pill badge-primary" style="background-color: {{ $company->priority ? $company->priority->color : '' }}">{{ $company->priority ? $company->priority->name : '' }}</span></td> --}}
                <td><a href="https://ofc.rapaport.com/Ofc3/CRM/Account.aspx?AccountID={{ $company->ofc }}" target="_blank">{{ $company->ofc }}</a></td>
                <td><a href="{{ route('companies.show', $company->id) }}">{{ $company->name }}</a></td>
                <td>{{ $company->rapnet }}</td>
                <td>{{ $company->person }}</td>
                <td>{{ $company->job_title }}</td>
                <td>{{ $company->companysize ? $company->companysize->name : '' }}</td>
                <td>{{ $company->country }}</td>
                @if (strtolower($company->website) == 'no website' || strtolower($company->website) == 'no websites' || $company->website == '')
                    <td>{{ $company->website }}</td>
                @else
                    <td><a href="{{ $company->website }}" target="_blank">{{ str_limit($company->website, 30) }}</a></td>
                @endif
                <td>{{ $company->sight_holder ? 'Yes' : 'No' }}</td>
                <td>{!! str_limit(implode(', ' , $company->roughs->pluck('name')->toArray()), 25) !!}</td>
                <td>{{ $company->trader ? 'Yes' : 'No' }}</td>
                <td>{!! str_limit(implode(', ' , $company->shapes->pluck('name')->toArray()), 25) !!}</td>
                <td>{{ $company->deals_size }}</td>
                <td>{{ $company->deals_color }}</td>
                <td>{{ $company->deals_clarity }}</td>
                <td>{{ $company->deals_make }}</td>
                <td>{{ $company->manufacturing_units }}</td>
                <td>{{ str_limit($company->branches, 25) }}</td>
                <td>{!! implode(', ' , $company->certs->pluck('name')->toArray()) !!}</td>
                <td>{{ str_limit($company->comments, 50) }}</td>
                <td>{{ str_limit($company->website_comments, 50) }}</td>
                <td>{{ $company->exhibiting_markets }}</td>
                <td>{{ $company->jewellery_manufacturing ? 'Yes' : 'No' }}</td>
                <td>{{ $company->jewellery_trading ? 'Yes' : 'No' }}</td>
                <td>{{ str_limit($company->address, 50) }}</td>
                <td>{{ $company->city }}</td>
                <td>{{ $company->state }}</td>
                <td>{{ $company->zip }}</td>
                <td>{{ str_limit($company->cell_numbers, 25) }}</td>
                <td>{{ str_limit($company->emails, 25) }}</td>
                <td>{{ $company->office }}</td>
                <td>{{ $company->phones }}</td>
                <td>{{ $company->fax }}</td>
            </tr>
        @empty

        @endforelse
    </tbody>
</table>
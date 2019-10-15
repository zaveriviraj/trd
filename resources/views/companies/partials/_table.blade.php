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
            <th>Website</th>
            <th>Sight</th>
            <th>Rough</th>
            <th>Shapes</th>
            <th>Size</th>
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
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
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
                <td><a href="https://ofc.rapaport.com/Ofc3/CRM/Account.aspx?AccountID={{ $company->associations }}" target="_blank">{{ $company->associations }}</a></td>
                <td><a href="{{ route('companies.show', $company->id) }}">{{ $company->name }}</a></td>
                <td>{{ $company->divisions }}</td>
                <td>{{ $company->person }}</td>
                <td>{{ $company->job_title }}</td>
                <td>{{ $company->companysize ? $company->companysize->name : '' }}</td>
                @if (strtolower($company->website) == 'no website' || strtolower($company->website) == 'no websites' || $company->website == '')
                    <td>{{ $company->website }}</td>
                @else
                    <td><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></td>
                @endif
                <td>{{ $company->sight_holder ? 'Yes' : 'No' }}</td>
                <td class="trimmed" data-full="{!! implode(', ' , $company->roughs->pluck('name')->toArray()) !!}" data-short="{!! str_limit(implode(', ' , $company->roughs->pluck('name')->toArray()), 25) !!}">
                    {!! str_limit(implode(', ' , $company->roughs->pluck('name')->toArray()), 25) !!}
                </td>
                <td class="trimmed" data-full="{!! implode(', ' , $company->shapes->pluck('name')->toArray()) !!}" data-short="{!! str_limit(implode(', ' , $company->shapes->pluck('name')->toArray()), 25) !!}">
                    {!! str_limit(implode(', ' , $company->shapes->pluck('name')->toArray()), 25) !!}
                </td>
                <td>{{ $company->deals_size }}</td>
                <td>{{ $company->deals_color }}</td>
                <td>{{ $company->deals_clarity }}</td>
                <td>{{ $company->deals_make }}</td>
                <td>{{ $company->manufacturing_units }}</td>
                <td class="trimmed" data-full="{{ $company->branches }}" data-short="{{ str_limit($company->branches, 25) }}">{{ str_limit($company->branches, 25) }}</td>
                <td>{!! implode(', ' , $company->certs->pluck('name')->toArray()) !!}</td>
                <td class="trimmed" data-full="{{ $company->comments }}" data-short="{{ str_limit($company->comments, 50) }}">{{ str_limit($company->comments, 50) }}</td>
                <td class="trimmed" data-full="{{ $company->website_comments }}" data-short="{{ str_limit($company->website_comments, 50) }}">{{ str_limit($company->website_comments, 50) }}</td>
                <td>{{ $company->exhibiting_markets }}</td>
                <td>{{ $company->jewellery_manufacturing ? 'Yes' : 'No' }}</td>
                <td>{{ $company->jewellery_trading ? 'Yes' : 'No' }}</td>
                <td class="trimmed" data-full="{{ $company->address }}" data-short="{{ str_limit($company->address, 50) }}">{{ str_limit($company->address, 50) }}</td>
                <td>{{ $company->city }}</td>
                <td>{{ $company->state }}</td>
                <td>{{ $company->country }}</td>
                <td>{{ $company->zip }}</td>
                <td class="trimmed" data-full="{{ $company->cell_numbers }}" data-short="{{ str_limit($company->cell_numbers, 25) }}">{{ str_limit($company->cell_numbers, 25) }}</td>
                <td class="trimmed" data-full="{{ $company->emails }}" data-short="{{ str_limit($company->emails, 25) }}">{{ str_limit($company->emails, 25) }}</td>
                <td>{{ $company->office }}</td>
                <td>{{ $company->phones }}</td>
                <td>{{ $company->fax }}</td>
            </tr>
        @empty

        @endforelse
    </tbody>
</table>
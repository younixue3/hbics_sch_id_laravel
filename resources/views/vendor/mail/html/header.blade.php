<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img class="object-cover w-20" src="https://drive.google.com/uc?export=view&id=1_cLm09SXFdm0_4C62vmfejMSzxG-tuQl" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

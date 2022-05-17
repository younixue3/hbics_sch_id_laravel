<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img class="object-cover h-36" src="https://drive.google.com/uc?export=view&id=13N1I01NXu50iYqIbrXo1pcZV3yYoQLot" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

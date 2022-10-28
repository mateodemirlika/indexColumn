@extends('twill::layouts.form', [
    'additionalFieldsets' => [['fieldset' => 'metadata', 'label' => 'SEO']],
])

@section('contentFields')
    @formField('input', [
    'name' => 'title',
    'label' => 'Title',

    ])
    @formField('wysiwyg', [
    'name' => 'description',
    'label' => 'Description',
    'toolbarOptions' => [
    ['header' => [2, 3, 4, 5, 6, false]],
    'bold',
    'italic',
    'underline',
    'strike',
    ["script" => "super"],
    ["script" => "sub"],
    "blockquote",
    "code-block",
    ['list' => 'ordered'],
    ['list' => 'bullet'],
    ['indent' => '-1'],
    ['indent' => '+1'],
    ["align" => []],
    ["direction" => "rtl"],
    'link',
    "clean",
    ],
    'placeholder' => 'Description here ... ',
    'editSource' => true,
    'note' => 'Hint message`',
    ])
    @formField('medias', [
    'name' => 'cover',
    'label' => 'Image',
    // 'max' => 5,
    ])

@stop


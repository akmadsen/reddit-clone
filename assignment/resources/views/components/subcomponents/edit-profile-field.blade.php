<div class="form-field">
    <label for="{{ $field }}">{{ $label }}:
        <?php if ($isRequired): ?> 
            <span class="required">*</span>
        <?php endif; ?>
    </label>
    <input 
        id="{{ $field }}"
        type="text"
        name="{{ $field }}1" 
        value="<?php echo old("$field", $default) ?>" 
        <?php if($isRequired): ?>
            required 
        <?php endif; ?> 
        autofocus>

    @if ($errors->has('{{ $field }}'))
        <span class="invalid-feedback" role="alert">
            <strong><?php echo $errors->first("$field") ?></strong>
        </span>
    @endif
</div>
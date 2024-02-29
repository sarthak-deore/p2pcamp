<?php

namespace GiveP2P\P2P\FieldsAPI\Views;

use DOMDocument;
use Give\Framework\FieldsAPI\Field;
use GiveP2P\P2P\FieldsAPI\Contracts\FieldViewContract;

/**
 * Class Color
 * @package GiveP2P\P2P\FieldsAPI\Views
 *
 * @since 1.0.0
 */
class Color extends FieldViewContract {
	/**
	 * @inheritDoc
	 */
	public function template( Field $field ) {
		$document = new DOMDocument;

		$input = $document->createElement( 'input' );
		$input->setAttribute( 'id', $field->getId() );
		$input->setAttribute( 'class', 'give-p2p-colorpicker ' . $field->getClass() );
		$input->setAttribute( 'name', $field->getName() );
		$input->setAttribute( 'type', 'text' );
		$input->setAttribute( 'placeholder', $field->getPlaceholder() );
		$input->setAttribute( 'value', esc_attr( $field->getDefaultValue() ) );

		if ( $field->isRequired() ) {
			$input->setAttribute( 'required', 'required' );
		}

		foreach( $field->getAttributes() as $name => $value ) {
			$input->setAttribute( $name, esc_attr( $value ) );
		}

		$document->appendChild( $input );

		return $document->saveHTML();
	}
}

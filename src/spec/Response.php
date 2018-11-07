<?php

/**
 * @copyright Copyright (c) 2018 Carsten Brandt <mail@cebe.cc> and contributors
 * @license https://github.com/cebe/php-openapi/blob/master/LICENSE
 */

namespace cebe\openapi\spec;

use cebe\openapi\SpecBaseObject;

/**
 * Describes a single response from an API Operation, including design-time, static links to operations based on the response.
 *
 * @link https://github.com/OAI/OpenAPI-Specification/blob/3.0.2/versions/3.0.2.md#responseObject
 *
 * @property-read string $description
 * @property-read Header[]|Reference[] $headers
 * @property-read MediaType[]|Reference[] $content
 * @property-read Link[]|Reference[] $links
 */
class Response extends SpecBaseObject
{
    /**
     * @return array array of attributes available in this object.
     */
    protected function attributes(): array
    {
        return [
            'description' => Type::STRING,// TODO implement support for reference
            'headers' => [Type::STRING, Header::class],
            'content' => [Type::STRING, MediaType::class],
            'links' => [Type::STRING, Link::class],
        ];
    }

    /**
     * Perform validation on this object, check data against OpenAPI Specification rules.
     */
    protected function performValidation()
    {
        $this->requireProperties(['description']);
    }
}

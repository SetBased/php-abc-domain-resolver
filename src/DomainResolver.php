<?php
//----------------------------------------------------------------------------------------------------------------------
namespace SetBased\Abc\DomainResolver;

//----------------------------------------------------------------------------------------------------------------------
/**
 * Interface for DomainResolvers. A DomainResolver resolves the domain (a.k.a the company abbreviation).
 */
interface DomainResolver
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the domain (a.k.a. company abbreviation).
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function getDomain();

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
